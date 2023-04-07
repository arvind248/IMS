import init from './student/init.js';
import newRecord from './student/new.js'
import { searchRecord } from './student/search.js';
import updateRecord from './student/update.js'
import { displayAlert,populateForm } from './data/data.js';
import { recordNavigation } from './student/recordnav.js';
const saveBtn=document.querySelector(".save-btn");
const newBtn=document.querySelector(".new-btn");
const updateBtn=document.querySelector(".update-btn");
const searchBtn=document.querySelector(".search-btn");
const deleteBtn=document.querySelector(".delete-btn");
const nextBtn=document.querySelector(".next-btn");
const prevBtn=document.querySelector(".prev-btn");
const firstRecordBtn=document.querySelector(".first-btn");
const lastRecordBtn=document.querySelector(".last-btn");




window.addEventListener("DOMContentLoaded", ()=>{
     init();
    if(localStorage.getItem('enrolled')==='clicked')
    {

        let StudentData=JSON.parse(localStorage.getItem('StudentData'));
        console.log(StudentData);
        populateForm(StudentData);
        if(saveBtn.classList.contains('hide-btn'))
            saveBtn.classList.remove("hide-btn");
        newBtn.classList.toggle("hide-btn");
        localStorage.removeItem('StudentData');
        localStorage.removeItem('enrolled');

    }
    
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
    let rollno=document.getElementById("rollno");  
    if(rollno.value==="")
    {
        displayAlert("Enter student ID", "danger", 3000);
        rollno.focus();

        return;
    }

    let response = await fetch(`./API/student/deleteRecord.php?rollno=${rollno.value}`);
    let result = await response.text();
    if(result==="Record Delete Successfully")
    {
        displayAlert(result, "danger", 3000);
        studentForm.reset();         
    }   
    else
    {
        displayAlert(result, "danger", 3000);

    }

    
    
})

