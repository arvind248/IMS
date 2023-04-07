import newRecord from './course/new.js'
import { searchRecord } from './course/search.js';
import updateRecord from './course/update.js'
import { displayAlert } from './data/data.js';
import { recordNavigation } from './course/recordnav.js';

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
    courseForm.reset();
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
    let name=document.getElementById("name");  
    if(name.value==="")
    {
        displayAlert("Enter course name", "danger", 3000);
        name.focus();

        return;
    }

    let response = await fetch(`./API/course/deleteRecord.php?name=${name.value}`);
    let result = await response.text();
    if(result==="Record Delete Successfully")
    {
        displayAlert(result, "danger", 3000);
        courseForm.reset();         
    }   
    else
    {
        displayAlert(result, "danger", 3000);

    }
    
});    
    
