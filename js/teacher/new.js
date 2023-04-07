import {displayAlert} from '../data/data.js'
const saveBtn=document.querySelector(".save-btn");
const newBtn=document.querySelector(".new-btn");

 export default async function newRecord(e){
    e.preventDefault();
    empForm.reset();

    
//testting form data    
    console.log("hello");
    // // let empData= Object.fromEntries(new FormData(empForm).entries())
    // let empdata =new FormData(empForm)
    // for (var key of empdata.keys()) {
    //     console.log(key);
    //  }

    let response = await fetch('./API/employee/fetchempid.php');
    let result = await response.text();
    console.log(result);
    let empid=document.getElementById("empid");
    empid.value=result;
    empid.ReadOnly=true;
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn");
    displayAlert("Employee id: "+result, "success", 3000);
    empid.focus();
    saveBtn.addEventListener('click',save)

}

async function save(e){
    let empdata= new FormData(empForm)
    

    // console.log(empdata);
    let response = await fetch('./API/employee/newRecord.php', {
      method: 'POST',
      body: empdata
    });
    
    let result = await response.text();
    
    if(result.search("successfully")>=0)
        displayAlert("Record Added Successfully", "success", 2000);
    else
        displayAlert("Enrollment id already Exist ", "danger", 2000);
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn"); 
    empForm.reset();
    
}


