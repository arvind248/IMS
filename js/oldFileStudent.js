let states={
    "AN":"Andaman and Nicobar Islands",
    "AP":"Andhra Pradesh",
    "AR":"Arunachal Pradesh",
    "AS":"Assam",
    "BR":"Bihar",
    "CG":"Chandigarh",
    "CH":"Chhattisgarh",
    "DN":"Dadra and Nagar Haveli",
    "DD":"Daman and Diu",
    "DL":"Delhi",
    "GA":"Goa",
    "GJ":"Gujarat",
    "HR":"Haryana",
    "HP":"Himachal Pradesh",
    "JK":"Jammu and Kashmir",
    "JH":"Jharkhand",
    "KA":"Karnataka",
    "KL":"Kerala",
    "LA":"Ladakh",
    "LD":"Lakshadweep",
    "MP":"Madhya Pradesh",
    "MH":"Maharashtra",
    "MN":"Manipur",
    "ML":"Meghalaya",
    "MZ":"Mizoram",
    "NL":"Nagaland",
    "OR":"Odisha",
    "PY":"Puducherry",
    "PB":"Punjab",
    "RJ":"Rajasthan",
    "SK":"Sikkim",
    "TN":"Tamil Nadu",
    "TS":"Telangana",
    "TR":"Tripura",
    "UP":"Uttar Pradesh",
    "UK":"Uttarakhand",
    "WB":"West Bengal"
}
const stateElem=document.getElementById("state");
const cityElem=document.getElementById("city");
const saveBtn=document.querySelector(".save-btn");
const newBtn=document.querySelector(".new-btn");
const updateBtn=document.querySelector(".update-btn");
const searchBtn=document.querySelector(".search-btn");
const deleteBtn=document.querySelector(".delete-btn");
const nextBtn=document.querySelector(".next-btn");
const prevBtn=document.querySelector(".prev-btn");
const firstRecordBtn=document.querySelector(".first-btn");
const lastRecordBtn=document.querySelector(".last-btn");

const alert=document.querySelector(".alert-msg");
let rollnoEl=document.getElementById("rollno");
let isSearch=false;
let lastRecord,firstRecord;

function setDefault(){
    isSearch=false;
}

document.addEventListener("DOMContentLoaded",()=>{
    stateElem.innerHTML=`<option></option>`;
    for (const key in states) {
        stateElem.innerHTML+=`<option value='${states[key]}' >${states[key]}</option>`;
    }
    

});

async function addCityOption(){

   
    let selectedState=stateElem.value;
    let response= await fetch(`./cityAPI.php?state=${selectedState}`)
    let cities=await  response.json()
    // console.log(cities);
    cityElem.innerHTML=`<option></option>`;
    cities.forEach(city => {
            cityElem.innerHTML+=`<option name='${city.name}'>${city.name}</option>`;        
       
        });
    
    
}

stateElem.addEventListener("change",addCityOption);

updateBtn.addEventListener('click',async (e)=>{
    e.preventDefault();    
    if(rollnoEl.value==="")
    {
        displayAlert("No Record To Update ", "danger", 3000);
        studentForm.reset();         
        return;
    }

    if(isSearch==false)
    {
        displayAlert("Search your Record ", "danger", 3000);
        let r=rollnoEl.value;
        studentForm.reset(); 
        rollnoEl.value=r;
        return;
    }
    
    let studentData= new FormData(studentForm);
    console.log(rollnoEl.value);
    let response = await fetch('./studentAPI/updateRecord.php', {
        method: 'POST',
      body: studentData
    });
    
    let result = await response.text();
    // console.log(result);
    if(result.search("successfully")>=0)
    {
        displayAlert(result, "success", 3000);
        setDefault();

    }
    else
    {
        displayAlert(result, "danger", 3000);
    }
    studentForm.reset();

})

saveBtn.addEventListener('click',async (e)=>{
    e.preventDefault();
    
    let studentData= new FormData(studentForm)
    

    // console.log(studentData);
    let response = await fetch('./studentAPI/newRecord.php', {
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
    

})


newBtn.addEventListener('click',async (e)=>{
    e.preventDefault();
    studentForm.reset();
 
    let response = await fetch('./studentAPI/fetchEnrollment.php');
    let result = await response.text();
    console.log(result);
    let rollnoEl=document.getElementById("rollno");
    rollnoEl.value=result;
    rollnoEl.ariaReadOnly=true;
    newBtn.classList.toggle("hide-btn");
    saveBtn.classList.toggle("hide-btn");
    displayAlert("Enrollment id: "+result, "success", 3000);
    rollnoEl.focus();
    
});
async function searchRecord(rollno){
    
    if(rollno==="")
    {
        displayAlert("Enter Roll no ", "danger", 3000);
        rollnoEl.focus();
        return ;
    }

    let response = await fetch(`./studentAPI/searchRecord.php?rollno=${rollno}`);
    let result = await response.text();
    return result;

  
}


searchBtn.addEventListener('click',async (e)=>{
    e.preventDefault();
    
    console.log(rollnoEl.value );
    let result= await searchRecord(rollnoEl.value);
    if( result===undefined)
        return;
    if(result.length!=0)
    {
        result = JSON.parse(result);        
        populateForm(result);
        displayAlert("Record Fetched ", "success", 3000);
        isSearch=true;
        prevStack.clearStack();
        nextStack.clearStack();
    }
    else{
        // console.log(result.length);
        displayAlert("Record Not Exist ", "danger", 3000);
        studentForm.reset();
    }

});


async function  populateForm(data){
            
    for (const [key, value] of Object.entries(data)) {
        console.log(key+":"+value);
        let ele=document.getElementsByName(`${key}`);        
        ele[0].value=value;
    }
     

    await addCityOption();
    let ele=document.getElementsByName('city');
    ele[0].value=data.city;
 


}

deleteBtn.addEventListener('click', async (e)=>{
    e.preventDefault();    
    if(rollnoEl.value==="")
    {
        displayAlert("Enter Roll no", "danger", 3000);
        rollnoEl.focus();

        return;
    }

    let response = await fetch(`./studentAPI/deleteRecord.php?rollno=${rollnoEl.value}`);
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

nextBtn.addEventListener("click", recordNavigation)
prevBtn.addEventListener("click", recordNavigation)
firstRecordBtn.addEventListener('click',recordNavigation)
lastRecordBtn.addEventListener('click',recordNavigation)

let nextStack={
    stack:[],
    store:async function (){
        // console.log(this.stack);
        if(this.stack.length==0){
            let response = await fetch(`./studentAPI/find.php?rollno=${rollnoEl.value}`);
            let result = await response.json();
            this.stack=result
        }
        console.log("nextStack:");
        console.log(this.stack)
    },
    
    getData:function(){
        // console.log("helo");
        return this.stack.shift();
    },
    setData:function(data){
        this.stack.unshift(data)
    },
    clearStack:function(){
        this.stack=[]
    }
    
}
let prevStack={
    stack:[],
    store:async function (){
        // console.log(this.stack);
        if(this.stack.length==0){
            let response = await fetch(`./studentAPI/findprev.php?rollno=${rollnoEl.value}`);
            let result = await response.json();
            this.stack=result
        }
        console.log("prevStack");
        console.log(this.stack)
    },
    
    getData:function(){
        // console.log("helo");
        return this.stack.pop();
    },
    setData:function(data){
        this.stack.push(data)
    },
    clearStack:function(){
        this.stack=[]
    }

}
    
    
async function recordNavigation(e){
    
    let currentStudent= Object.fromEntries( new FormData(studentForm).entries())
    isSearch=true;
    // console.log(currentStudent);
    if(e.currentTarget.classList.contains("prev-btn"))
    {
        await prevStack.store()
        data=prevStack.getData()
        // console.log(data)
        populateForm(data);
        nextStack.setData(currentStudent)
        

    }

    if(e.currentTarget.classList.contains("next-btn"))
    {
        await nextStack.store();
        data=nextStack.getData()
        populateForm(data);
        prevStack.setData(currentStudent);
        // console.log(data)
    }

    if(e.currentTarget.classList.contains("first-btn"))
    {
            populateForm(firstRecord)     
            prevStack.clearStack();    
            nextStack.clearStack();          
    }
    if(e.currentTarget.classList.contains("last-btn"))
    {
        populateForm(lastRecord)       
        prevStack.clearStack();    
        nextStack.clearStack();        
    }

    // if(result.length!=0)
    // {
    //     console.log(result);
        
    // }
    // else
    // {
    //     displayAlert(result, "danger", 3000);

    // }

}




function displayAlert(msg,type,time){    
    alert.textContent=msg;
    alert.classList.add(`alert-${type}`);
    
    setTimeout(function () {
        alert.textContent="' ";
        alert.classList.remove(`alert-${type}`);
    }, time);
}

window.addEventListener('DOMContentLoaded',async()=>{    
    let response = await fetch(`./studentAPI/init.php`)
    let result = await response.json();
    // console.log(result);
    firstRecord =result[0];
    lastRecord =result[1];

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
