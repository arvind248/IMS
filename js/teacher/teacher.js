import init from './init.js';
import newRecord from './new.js'
import { searchRecord } from './search.js';
import updateRecord from './update.js'
import { displayAlert } from './data.js';
import { recordNavigation } from './recordnav.js';

const newBtn=document.querySelector(".new-btn");
const updateBtn=document.querySelector(".update-btn");
const searchBtn=document.querySelector(".search-btn");
const deleteBtn=document.querySelector(".delete-btn");
const nextBtn=document.querySelector(".next-btn");
const prevBtn=document.querySelector(".prev-btn");
const firstRecordBtn=document.querySelector(".first-btn");
const lastRecordBtn=document.querySelector(".last-btn");




window.addEventListener("DOMContentLoaded",init)
newBtn.addEventListener('click',newRecord)
searchBtn.addEventListener('click',searchRecord)
updateBtn.addEventListener('click',updateRecord)
nextBtn.addEventListener("click", recordNavigation)
prevBtn.addEventListener("click", recordNavigation)
firstRecordBtn.addEventListener('click',recordNavigation)
lastRecordBtn.addEventListener('click',recordNavigation)

deleteBtn.addEventListener('click', async (e)=>{
    e.preventDefault();  
    let empid=document.getElementById("empid");  
    if(empid.value==="")
    {
        displayAlert("Enter Employee ID", "danger", 3000);
        empid.focus();

        return;
    }

    let response = await fetch(`./employeeAPI/deleteRecord.php?empid=${empid.value}`);
    let result = await response.text();
    if(result==="Record Delete Successfully")
    {
        displayAlert(result, "danger", 3000);
        empForm.reset();         
    }   
    else
    {
        displayAlert(result, "danger", 3000);

    }

    
    
})