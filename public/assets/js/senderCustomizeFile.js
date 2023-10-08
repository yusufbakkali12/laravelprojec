
// const axios =require('./package/axios.js')


function getAllFormInputs() {
    // Get the form element using selector class
    const form = document.querySelector('.selectallinput');


    const inputValues = [];
    const selectbtnValues = [];
    const objectAllinput = [];

    // Select all input elements within the form
    const inputElements = form.querySelectorAll('input');
    const selectElments = form.querySelectorAll('select');
    const selectbtnElements = form.querySelectorAll('.select-btn');



    inputElements.forEach((element) => {inputValues.push(element);});
    selectElments.forEach((element) => {inputValues.push(element);});
    selectbtnElements.forEach((element) => {selectbtnValues.push(element);});





    inputValues.forEach((element) => {

        obliged= !element.getAttribute('obliged') ? false : true;
        objectAllinput.push({
            "type":element.type,
            "value":element.value,
            "libel":element.name,
            "status":1,
            "postion":element.getBoundingClientRect(),
            "oblige":obliged,
    });
});

    selectbtnValues.forEach((element) => {
        obliged= !element.getAttribute('obliged') ? false : true;
        objectAllinput.push({
            "type":element.getAttribute('type'),
            "value":element.firstElementChild.textContent,
            "libel":element.getAttribute('name'),
            "status":1,
            "postion":element.getBoundingClientRect(),
            "oblige":obliged,
        });


    });

    console.log(objectAllinput)
    return {objectAllinput , token};
  }

  async function senderCustomizeFile(){
      try{
          const {objectAllinput , token}=getAllFormInputs();

        await axios.post("http://127.0.0.1:8000/api/customizefile",objectAllinput)
        .then(res=>{console.log(res)})
        .catch(err=>{console.log(err)})
        }
    catch(err){
        // if(err.response.status===404){
        //     console.error('Data not found');
        // }else{
            console.error(err)
            // console.error('500')
        // }
    }
}



//  getAllFormInputs();



// const file={

//     header:
//         [
//             {
//                 "inputName":String,
//                 "valueDefault":String,
//                 "type":String,
//                 "obliged":Boolean,
//             }
//         ]
//     ,
//     body:{

//     },
//     footer:{

//     }

// }






const form = document.querySelector('.selectallinput');

const pos = form.getBoundingClientRect()
console.log(pos)
