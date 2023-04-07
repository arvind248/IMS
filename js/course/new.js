import {displayAlert} from '../data/data.js'
const saveBtn=document.querySelector(".save-btn");
const newBtn=document.querySelector(".new-btn");

 export default async function newRecord(e){
    e.preventDefault();
    courseForm.reset();

    

    
    
    let name=document.getElementById("name");
    
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn");
    
    name.focus();
    saveBtn.addEventListener('click',save)

}

async function save(e){
    let courseData= new FormData(courseForm)    
    // console.log(courseForm);
    let response = await fetch('./API/course/newRecord.php', {
      method: 'POST',
      body: courseData
    });
    
    let result = await response.text();
    console.log(result);
    if(result.search("successfully")>=0)
        displayAlert("Record Added Successfully", "success", 2000);
    else
        displayAlert("Course already Exist ", "danger", 2000);
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn"); 
    courseForm.reset();
    
}


