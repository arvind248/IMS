import {displayAlert} from '../data/data.js'
const saveBtn=document.querySelector(".save-btn");
const newBtn=document.querySelector(".new-btn");

 export default async function newRecord(e){
    e.preventDefault();
    studentForm.reset();

    
//testting form data    
    console.log("hello");
    // // let empData= Object.fromEntries(new FormData(studentForm).entries())
    // let studentData =new FormData(studentForm)
    // for (var key of studentData.keys()) {
    //     console.log(key);
    //  }

    let response = await fetch('./API/student/fetchid.php');
    let result = await response.text();
    console.log(result);
    let rollno=document.getElementById("rollno");
    rollno.value=result;
    rollno.ReadOnly=true;
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn");
    displayAlert("student id: "+result, "success", 3000);
    rollno.focus();
    saveBtn.addEventListener('click',save)

}

async function save(e){
    let studentData= new FormData(studentForm)
    

    // console.log(studentData);
    let response = await fetch('./API/student/newRecord.php', {
      method: 'POST',
      body: studentData
    });
    
    let result = await response.text();
    
    if(result.search("successfully")>=0)
        displayAlert("Record Added Successfully", "success", 2000);
    else
        displayAlert("Enrollment id already Exist ", "danger", 2000);
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn"); 
    studentForm.reset();
    
}


