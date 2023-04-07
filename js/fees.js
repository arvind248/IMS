import newRecord from './fees/new.js'
import { searchRecord } from './fees/search.js';
import updateRecord from './fees/update.js'
import { displayAlert } from './data/data.js';


const newBtn=document.querySelector(".new-btn");
const saveBtn=document.querySelector(".save-btn");
const updateBtn=document.querySelector(".update-btn");
const searchBtn=document.querySelector(".search-btn");
const deleteBtn=document.querySelector(".delete-btn");
const refreshBtn=document.querySelector(".refresh-btn");
const schoolorship=document.querySelector(".schoolorship");
const addmsnfees=document.querySelector(".addmsnfees");
const remaining=document.querySelector(".remaining");
const courseFees=document.querySelector(".course-fees");
schoolorship.addEventListener('input',changeRemaining)
addmsnfees.addEventListener('input',changeRemaining)
courseFees.addEventListener('input',changeRemaining);
function changeRemaining(){
    console.log("hello");
    remaining.value=parseInt(courseFees.value)-(parseInt(schoolorship.value)+ parseInt(addmsnfees.value));
    
}

const emi=document.querySelector(".emi");
const rate=document.querySelector(".rate");
const tenure=document.querySelector(".tenure");
const emiBtn=document.querySelector(".emi-btn");
emiBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    
    let p=parseInt(remaining.value);
    let t=parseInt(tenure.value);
    let r=parseInt(rate.value) / (12*100);
    emi.value =Math.round( (p * r * Math.pow(1 + r, t)) / (Math.pow(1 + r, t) - 1));
    


})






refreshBtn.addEventListener('click',()=>{
    feesForm.reset();
    if(!saveBtn.classList.contains("hide-btn"))
        saveBtn.classList.add("hide-btn"); 

    newBtn.classList.remove("hide-btn");


})



newBtn.addEventListener('click',newRecord)
searchBtn.addEventListener('click',searchRecord)
updateBtn.addEventListener('click',updateRecord)

deleteBtn.addEventListener('click', async (e)=>{
    e.preventDefault();  
    let rollno=document.getElementById("rollno");  
    if(rollno.value==="")
    {
        displayAlert("Enter rollno", "danger", 3000);
        rollno.focus();

        return;
    }

    let response = await fetch(`./API/fees/deleteRecord.php?rollno=${rollno.value}`);
    let result = await response.text();
    if(result==="Record Deleted Successfully")
    {
        displayAlert(result, "danger", 3000);
        feesForm.reset();         
    }   
    else
    {
        displayAlert(result, "danger", 3000);

    }
    
});    
    
