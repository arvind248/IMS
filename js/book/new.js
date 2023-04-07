import {displayAlert} from '../data/data.js'
const saveBtn=document.querySelector(".save-btn");
const newBtn=document.querySelector(".new-btn");

 export default async function newRecord(e){
    e.preventDefault();
    bookform.reset();

    
//testting form data    
    console.log("hello");
    // // let empData= Object.fromEntries(new FormData(bookform).entries())
    // let bookData =new FormData(bookform)
    // for (var key of bookData.keys()) {
    //     console.log(key);
    //  }

    let response = await fetch('./API/book/fetchid.php');
    let result = await response.text();
    console.log(result);
    let bookid=document.getElementById("bookid");
    bookid.value=result;
    bookid.ReadOnly=true;
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn");
    displayAlert("Book id: "+result, "success", 3000);
    bookid.focus();
    saveBtn.addEventListener('click',save)

}

async function save(e){
    let bookData= new FormData(bookform)    
    // console.log(bookData);
    let response = await fetch('./API/book/newRecord.php', {
      method: 'POST',
      body: bookData
    });
    
    let result = await response.text();
    console.log(result);
    if(result.search("successfully")>=0)
        displayAlert("Record Added Successfully", "success", 2000);
    else
        displayAlert("book id already Exist ", "danger", 2000);
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn"); 
    bookform.reset();
    
}


