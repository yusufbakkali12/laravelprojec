
function allowDrop(ev) {
    ev.preventDefault();
  }

  function drag(ev) {
    console.log(ev.target.id)
    ev.dataTransfer.setData("text", ev.target.id);
  }

  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    console.log(data)
    ev.target.appendChild(document.getElementById(data));
  }

function deletZone(e) {
    e.parentElement.remove();
    console.log("delete zone Produte");
}








//#####  add feild  #####//

const buttonCreatefield=document.getElementById("create")
buttonCreatefield.addEventListener('click',()=>{

    const Libel =document.getElementById("libel").value
    const type =document.getElementById("type").value
    const value =document.getElementById("value").value
    const obliged = document.getElementById("obliged").checked

    if(Libel!=="" && value!==""){
        document.getElementById("libel").classList.remove('is-invalid')
        document.getElementById("value").classList.remove('is-invalid')
        if(type==="select"){
            const newvalue = value.split('#')
            const options=newvalue.map(e=>{return `<option value="${e}">${e}</option>`})
            document.getElementById("affiche").innerHTML+=`
                    <div id="${Libel}" class="border border-1 m-1 p-1 d-flex align-items-center" draggable="true" ondragstart="drag(event)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grip-vertical" viewBox="0 0 16 16">
                            <path d="M7 2a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                        <label for="${Libel}" id="${Libel}" class="fw-bolder w-100 d-flex align-items-center mx-auto"  >
                            <span>${Libel}</span>${obliged && '<span class="text-primary">*</span>'  }
                            : <select id=${Libel} class="form-select ms-2 " ${obliged && 'obliged="obliged"'  } name=${Libel} type="select">
                            ${options}
                            </select>
                        </label>
                        <button type="button" class="btn btn-group-sm btn-primary text-white rounded-5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Suppreme line" onclick="deletZone(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                                <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"></path>
                            </svg>
                        </button>
                    </div>`
        }
        else{
            document.getElementById("affiche").innerHTML+=`
            <div id="${Libel}" class="border border-1 m-1 p-1 d-flex align-items-center w-auto" draggable="true" ondragstart="drag(event)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grip-vertical" viewBox="0 0 16 16">
                    <path d="M7 2a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                <label for="${Libel}" id="${Libel}" class="d-flex fw-bolder align-items-center justify-content-center" >
                    ${Libel}${obliged && '<span class="text-primary">*</span>'}:<input id="${Libel}" class="form-control ms-2"  ${obliged && 'obliged="obliged"'} name="${Libel}" type="${type}" value="${value}">
                </label>
                <button type="button" class="btn btn-primary text-white rounded-5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Suppreme line" onclick="deletZone(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                        <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"></path>
                    </svg>
                </button>
            </div>`
        }
    }
    else{
        !Libel ? document.getElementById("libel").classList.add('is-invalid') : document.getElementById("libel").classList.remove('is-invalid')
        !value ? document.getElementById("value").classList.add('is-invalid')  : document.getElementById("value").classList.remove('is-invalid')
    }

})



