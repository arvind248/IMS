
const bookid = document.getElementById("bookid");
const rollno = document.getElementById("rollno");
const searchBtn = document.querySelector(".search-btn");
const issueBtn = document.querySelector(".issue-btn");
const saveBtn = document.querySelector(".save-btn");
const cancleBtn = document.querySelector(".cancle-btn");
let alert=document.querySelector(".alert-msg");
var right=document.querySelector(".right");
var left=document.querySelector(".left");
let bookData;

let checkes={
    issueid:false,
    bookid:false,
    rollno:false,
    validate:function(){
            if(this.issueid===false)
            {
                displayAlert("Generate ISSUE ID","danger",3000);
                return false;

            }else if(this.bookid===false) {
                displayAlert("check Book ID","danger",3000);
                return false;    
            }else if(this.rollno===false){
                displayAlert("check rollno ","danger",3000);
                return false;    
            }  
            else{
                return true;
            }
    },

    setDefault:function(){
        this.issueid=false
        this.bookid=false
        this.rollno=false
    }


}


issueBtn.addEventListener('click',async()=>{
    let response = await fetch('./fetchid.php');
    let result = await response.json();    
    console.log(result);
    let issueid=document.getElementById("issueid");
    issueid.value=result;
    issueid.ReadOnly=true;
    
    displayAlert("Batch id: "+result, "success", 3000);
    issueid.focus();
    checkes.issueid=true;
    


})
saveBtn.addEventListener('click',save)
async function save(e){

    if(!checkes.validate())
        return;


    
    let issueData= new FormData(issueForm)    
    // console.log(issueData);
    let response = await fetch('./newRecord.php', {
      method: 'POST',
      body: issueData
    });
    
    let result = await response.text();
    console.log(result);
    if(result.search("successfully")>=0){
        
        let data=new FormData();
        bookData.status='ISSUED';
        console.log(bookData);
        for (const [key, value] of Object.entries(bookData)) {            
            data.append(key,value);
        }   
        let response = await fetch('../../book/bookAPI/updateRecord.php', {
            method: 'POST',
          body: data
        });
        
        let result = await response.text();
        console.log(result);
        // if(result.search("successfully")>=0)
        // {
        //     displayAlert(result, "success", 3000);
        //     unsetSearch();
    
        // }
        // else
        // {
        //     displayAlert(result, "danger", 3000);
        // }


        displayAlert("Record Added Successfully", "success", 2000);
        
    }
    else
        displayAlert("book id already Exist ", "danger", 2000);
    
    issueForm.reset();
}



searchBtn.addEventListener('click',async()=>{

    // console.log("hello bidu");


    // if(issueid.value==='')
    // {
        
    //         displayAlert("Generate ISSUE ID", "danger", 3000);
    //         issueBtn.focus();
    //         return;
            
        
    // }

    if(bookid.value!='')
    {
        let response = await fetch(`../../book/bookAPI/searchRecord.php?bookid=${bookid.value}`);
        let result = await response.text();
        
        // console.log(result);
        // // console.log(right);
        if(result.length!=0)
        {
            result = JSON.parse(result);                    
            populateForm(result,left) 
            displayAlert("Record Fetched ", "success", 3000);
            bookData=result;    
            checkes.bookid=true;
            
        }
        else{
            // console.log(result.length);
            displayAlert("Record Not Exist ", "danger", 3000);
            studentForm.reset();
        }




    }
    
   

    if(rollno.value!='')
    {
        // console.log(rollno.value);   

        let response = await fetch(`../../student/studentAPI/searchRecord.php?rollno=${rollno.value}`);
        let result = await response.text();                
        if(result.length!=0)
        {
            result = JSON.parse(result);        
            // populateForm(result);
            populateForm(result,right) 
            displayAlert("Record Fetched ", "success", 3000);
            checkes.rollno=true;
            
            
        }
        else{
            // console.log(result.length);
            displayAlert("Record Not Exist ", "danger", 3000);
            studentForm.reset();
        }

    }
    
   
})

bookid.addEventListener("keyup", function(event) {
        
    if (event.code==='Enter' ||event.code==='NumpadEnter' ) {
            if(bookid.value==='')
            {
                
                displayAlert("Enter book no ", "danger", 3000);
                bookid.focus();
                return;

            }


        event.preventDefault();    
        searchBtn.click();
        // console.log("enter click");

    }
    
});
rollno.addEventListener("keyup", function(event) {
    
        
  if (event.code==='Enter' || event.code==='NumpadEnter') {
        if(rollno.value==='')
        {
            displayAlert("Enter Roll no ", "danger", 3000);
            rollno.focus();
            return;
        }
    event.preventDefault();    
    searchBtn.click();
    // console.log("enter click");

  }
  
});





cancleBtn.addEventListener('click',()=>{
    issueForm.reset();
    checkes.setDefault();
})


function displayAlert(msg,type,time){    
    alert.textContent=msg;
    alert.classList.add(`alert-${type}`);
    
    setTimeout(function () {
        alert.textContent="' ";
        alert.classList.remove(`alert-${type}`);
    }, time);
}



async function  populateForm(data,form ){
            
    for (const [key, value] of Object.entries(data)) {
        console.log(key+":"+value);
        let ele=form.querySelector(`.${key}`);        
        if(ele!=null)
            ele.value=value;
    }
     

    
}
