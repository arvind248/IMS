import newRecord from './book/new.js'
import { searchRecord } from './book/search.js';
import updateRecord from './book/update.js'
import { displayAlert } from './data/data.js';
import { recordNavigation } from './book/recordnav.js';

const newBtn=document.querySelector(".new-btn");
const saveBtn=document.querySelector(".save-btn");

const updateBtn=document.querySelector(".update-btn");
const searchBtn=document.querySelector(".search-btn");
const deleteBtn=document.querySelector(".delete-btn");
const nextBtn=document.querySelector(".next-btn");
const prevBtn=document.querySelector(".prev-btn");
const firstRecordBtn=document.querySelector(".first-btn");
const lastRecordBtn=document.querySelector(".last-btn");
const refreshBtn=document.querySelector(".refresh-btn");

refreshBtn.addEventListener('click',()=>{
    bookform.reset();
    if(!saveBtn.classList.contains("hide-btn"))
    saveBtn.classList.add("hide-btn"); 

    newBtn.classList.remove("hide-btn");
})


// window.addEventListener("DOMContentLoaded",init)
newBtn.addEventListener('click',newRecord)
searchBtn.addEventListener('click',searchRecord)
updateBtn.addEventListener('click',updateRecord)
nextBtn.addEventListener("click", recordNavigation)
prevBtn.addEventListener("click", recordNavigation)
firstRecordBtn.addEventListener('click',recordNavigation)
lastRecordBtn.addEventListener('click',recordNavigation)

deleteBtn.addEventListener('click', async (e)=>{
    e.preventDefault();  
    let bookid=document.getElementById("bookid");  
    if(bookid.value==="")
    {
        displayAlert("Enter book ID", "danger", 3000);
        bookid.focus();

        return;
    }

    let response = await fetch(`./API/book/deleteRecord.php?bookid=${bookid.value}`);
    let result = await response.text();
    if(result==="Record Delete Successfully")
    {
        displayAlert(result, "danger", 3000);
        bookform.reset();         
    }   
    else
    {
        displayAlert(result, "danger", 3000);

    }
    
});    
    
