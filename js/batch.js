import newRecord from './batch/new.js'
import { searchRecord } from './batch/search.js';
import updateRecord from './batch/update.js'
import { displayAlert } from './data/data.js';
import { recordNavigation } from './batch/recordnav.js';

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
    batchForm.reset();
    if(!saveBtn.classList.contains("hide-btn"))
        saveBtn.classList.add("hide-btn"); 

    newBtn.classList.remove("hide-btn");


})



newBtn.addEventListener('click',newRecord)
searchBtn.addEventListener('click',searchRecord)
updateBtn.addEventListener('click',updateRecord)
nextBtn.addEventListener("click", recordNavigation)
prevBtn.addEventListener("click", recordNavigation)
firstRecordBtn.addEventListener('click',recordNavigation)
lastRecordBtn.addEventListener('click',recordNavigation)

deleteBtn.addEventListener('click', async (e)=>{
    e.preventDefault();  
    let batchid=document.getElementById("batchid");  
    if(batchid.value==="")
    {
        displayAlert("Enter batch ID", "danger", 3000);
        batchid.focus();

        return;
    }

    let response = await fetch(`./API/batch/deleteRecord.php?batchid=${batchid.value}`);
    let result = await response.text();
    if(result==="Record Deleted Successfully")
    {
        displayAlert(result, "danger", 3000);
        batchForm.reset();         
    }   
    else
    {
        displayAlert(result, "danger", 3000);

    }
    
});    
    
