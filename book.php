<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/book.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
     
</head>
<body>
    <?php include_once './common/navbar.php'?>
    <div class="alert-msg">sdfs</div>        
    <div class="container">
        <form class="form-container" name="bookform">
                <div class="field"><label for="">Book ID</label><input type="number" name="bookid" id="bookid"></div> 
                <div class="field"><label for="">name</label><input type="text" name="name"></div> 
                <div class="field"><label for="">title</label><input name="title" type="text"></div>                            
                <div class="field"><label for="">Author</label><input name="author" type="text"></div> 
                <div class="field"><label for="">price</label><input name="price" type="number"></div>
                <div class="field"><label for="">pages</label><input name="pages" type="number"></div> 
                <div class="field"><label for="">ISBN no</label><input name="isbnno" type="text"></div> 
                <div class="field"><label for="">category</label>
                                                        <select name="category" id="">
                                                            <option value="" hidden selected disabled></option>
                                                            <option value="Arts & Music">Arts & Music</option>
                                                                <option value="Biographies">Biographies</option>
                                                                <option value="Business">Business</option>
                                                                <option value="Comics">Comics</option>
                                                                <option value="Computers & Tech">Computers & Tech</option>
                                                                <option value="Cooking">Cooking</option>
                                                                <option value="Edu & Reference">Edu & Reference</option>
                                                                <option value="Entertainment">Entertainment</option>
                                                                <option value="Health & Fitness">Health & Fitness</option>
                                                                <option value="History">History</option>
                                                                <option value="Hobbies & Crafts">Hobbies & Crafts</option>
                                                                <option value="Home & Garden">Home & Garden</option>
                                                                <option value="Horror">Horror</option>
                                                                <option value="Kids">Kids</option>
                                                                <option value="Literature & Fiction">Literature & Fiction</option>
                                                                <option value="Medical">Medical</option>
                                                                <option value="Mysteries">Mysteries</option>
                                                                <option value="Parenting">Parenting</option>
                                                                <option value="Religion">Religion</option>
                                                                <option value="Romance">Romance</option>
                                                                <option value="Sci-Fi & Fantasy">Sci-Fi & Fantasy</option>
                                                                <option value="Science & Math">Science & Math</option>
                                                                <option value="Self-Help">Self-Help</option>
                                                                <option value="Social Sciences">Social Sciences</option>
                                                                <option value="Sports">Sports</option>
                                                                <option value="Teen">Teen</option>
                                                                <option value="Travel">Travel</option>
                                                                <option value="True Crime">True Crime</option>
                                                                <option value="Westerns">Westerns</option>

                                                        </select>
                
                </div> 
                <div class="field"><label for="">status</label>
                                                        <select name="status" id="">
                                                            <option value="" hidden selected disabled></option>
                                                            <option value="ISSUED">ISSUED</option>
                                                            <option value="AVAILABLE">AVAILABLE</option>
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
<script src="./js/book.js" type="module"></script>
</body>
</html>