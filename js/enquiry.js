import init from './student/init.js';
import newRecord from './enquiry/new.js'
import { searchRecord } from './enquiry/search.js';
import updateRecord from './enquiry/update.js'
import { displayAlert } from './data/data.js';
import { recordNavigation } from './enquiry/recordnav.js';


const newBtn=document.querySelector(".new-btn");
const saveBtn=document.querySelector(".save-btn");
const updateBtn=document.querySelector(".update-btn");
const searchBtn=document.querySelector(".search-btn");
const enrollBtn=document.querySelector(".enroll-btn");
const nextBtn=document.querySelector(".next-btn");
const prevBtn=document.querySelector(".prev-btn");
const firstRecordBtn=document.querySelector(".first-btn");
const lastRecordBtn=document.querySelector(".last-btn");
const refreshBtn=document.querySelector(".refresh-btn");
refreshBtn.addEventListener('click',()=>{
    enquiryForm.reset();
    if(!saveBtn.classList.contains("hide-btn"))
        saveBtn.classList.add("hide-btn"); 

    newBtn.classList.remove("hide-btn");


})




window.addEventListener("DOMContentLoaded",init)
newBtn.addEventListener('click',newRecord)
searchBtn.addEventListener('click',searchRecord)
updateBtn.addEventListener('click',updateRecord)
nextBtn.addEventListener("click", recordNavigation)
prevBtn.addEventListener("click", recordNavigation)
firstRecordBtn.addEventListener('click',recordNavigation)
lastRecordBtn.addEventListener('click',recordNavigation)



enrollBtn.addEventListener('click', async (e)=>{
    e.preventDefault();  


    let enquiryid=document.getElementById("enquiryid");  
    if(enquiryid.value==="")
    {
        displayAlert("Enter Enquiry ID", "danger", 3000);
        enquiryid.focus();
        return;
    }
    let status=document.getElementsByName("status");  
    

    
    let response = await fetch(`./API/student/fetchid.php`);
    let result = await response.text();
    console.log(result);
    let data=new FormData(enquiryForm);
    
    
    data.append('rollno',result)
    data.delete('enquiryid')
    data.delete('enquirydate')
    data.delete('registrationfees')
    data.delete('status')
    let endata= Object.fromEntries(data.entries());
    localStorage.setItem('StudentData',JSON.stringify(endata));
    localStorage.setItem('enrolled','clicked');
    // console.log(JSON.parse( localStorage.getItem('StudentData')));
    
    window.location.href="./student.php";

    

    
    
})


