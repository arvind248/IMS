import {addStateOption,courses} from '../data/data.js';
const stateElem=document.getElementById("state");
const cityElem=document.getElementById("city");

export default function init(){
    addStateOption();
    populateQualification();


}

function populateQualification(){
    let table=document.getElementById("qualification-table");

    //passing year 
    let yr=new Date().getFullYear() 
    let year='<option value="" disabled selected hidden></option>'
    for (let i =2000; i < yr; i++) {
        year+=`<option value="${i}">${i}</option>`        
    }    

    for (let i = 0; i < 4; i++) {
        let tr=`<tr>
                    <td>${i+1}.</td>
                    <td width="220px" >
                                        <select name="qualification${i+1}" id="q" required> 
                                               ${courses}
                                        </select>

                                    

                    </td>
                    <td ><input type="text" name="college${i+1}"></td>
                    <td width="100px">
                                                        <select name="passingyear${i+1}" id="" required>
                                                                ${year}
                                                        </select> 
                    </td>
                    <td><input type="text" name="marks${i+1}" ></td>

                </tr> `;
        table.innerHTML+=tr;
        
    }


    

    

}