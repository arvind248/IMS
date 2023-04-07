import {displayAlert, unsetSearch,isSearch} from '../data/data.js'

export default async function updateRecord(e){
    let rollno=document.getElementById("rollno");
    e.preventDefault();    
    if(rollno.value==="")
    {
        displayAlert("No Record To Update ", "danger", 3000);
        studentForm.reset();         
        return;
    }

    if(isSearch==false)
    {
        displayAlert("Search your Record ", "danger", 3000);
        let r=rollno.value;
        studentForm.reset(); 
        rollno.value=r;
        return;
    }
    
    let empData= new FormData(studentForm);
    console.log(rollno.value);
    let response = await fetch('./API/student/updateRecord.php', {
        method: 'POST',
      body: empData
    });
    
    let result = await response.text();
    console.log(result);
    if(result.search("successfully")>=0)
    {
        displayAlert(result, "success", 3000);
        unsetSearch();

    }
    else
    {
        displayAlert(result, "danger", 3000);
        studentForm.reset();
    }

}
