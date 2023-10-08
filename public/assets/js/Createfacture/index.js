// const { NULL } = require("sass");

// ?? print pdf
function printDiv(divName) {
    const printContents = document.getElementById(divName).innerHTML;
    console.log(printContents)
     const originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
     window.print();
    document.body.innerHTML = originalContents;
}
// ?? print pdf



// ?? get product for  data select
async function getdata() {
    return await axios.get("http://127.0.0.1:8000/api/product").then(res=>res.data)

}
// getdata();
// ?? get product for  data select


// this function for event select
async function FselectBtn(e) {
    // testataa()
    let SelectApii = await getdata();

    let dataSelect = [];

     SelectApii.data.map((e) =>(dataSelect = [...dataSelect, e.product]));
    e.parentElement.classList.toggle("active");
    const selectBtn = e,
        searchInp = e.parentElement.children[1].children[0].children[1],
        options = e.parentElement.children[1].children[1];
    function adddataSelect(selectedprod) {
        options.innerHTML = "";
        dataSelect.forEach((prod) => {
            let isSelected = prod == selectedprod ? "selected" : "";
            let li = `<li class="${isSelected}">${prod}</li>`;

            options.insertAdjacentHTML("beforeend", li);
        });
    }
    adddataSelect();
    const listLi = e.parentElement.children[1].children[1].children;
    searchInp.addEventListener("keyup", (e) => {
        let arr = [];
        let searchWord = searchInp.value.toLowerCase();
        const listLii = e.target.parentElement.parentElement.children[1].children;
        arr = dataSelect.filter((data) => {return data.toLowerCase().includes(searchWord) ;}).map((data) => {
                let isSelected = data == selectBtn.firstElementChild.innerText? "selected": "";
                return `<li class="${isSelected}">${data}</li>`;
            }).join("");
        options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! product not found</p>`;
        for (let i = 0; i < listLii.length; i++)
            listLii[i].addEventListener("click", (selectedLi) => {
                searchInp.value = "";
                adddataSelect(selectedLi.target.innerText);
                e.target.parentElement.parentElement.parentElement.classList.remove("active");
                selectBtn.firstElementChild.innerText = selectedLi.target.innerText;
            });
    });
    for (let i = 0; i < listLi.length; i++)
        listLi[i].addEventListener("click", (selectedLi) => {
            searchInp.value = "";
            adddataSelect(selectedLi.target.innerText);
            e.parentElement.classList.remove("active");
            selectBtn.firstElementChild.innerText = selectedLi.target.innerText;
        });
}




function deletZoneProdute(e) {
    e.parentElement.parentElement.remove();
    console.log("delete zone Produte");
}






// ?? get last number fucteurd
var factuerApi = "";
async function getnumFacture() {

    // console.log(document.querySelector('#numFacture').value )
    if(document.querySelector('#numFacture').value  == ''){
        try{
            const Object = await axios.get("http://127.0.0.1:8000/api/factuer").then(res=>res.data)
            factuerApi =await Object;
            document.querySelector('#numFacture').value=factuerApi.data[factuerApi.data.length-1].id+1
        }
        catch(err){
            if(err.response.status===404){
                console.error('Data not found');
            }else{
                console.error(err)
            }
        }
    }

    // return SelectApi;
}
getnumFacture();
// ?? get last number fucteurd



const check_numFacture=(i)=>{
    // console.log(i.value)
    let t=[]
    let qr=document.querySelector('#msgErr')

    factuerApi.data.map(e=>{t=[...t,e.numFacture.split('/')[1]]})
    const bool= t.some(e=>e==parseInt(i.value) )

   if(bool){
       qr.innerText='existe déjà';
       i.classList.add('is-invalid');
       document.querySelector('#CompletFactuer').classList.add('disabled')
       document.querySelector('#orders-paid-tab').classList.add('disabled')
    }
    else{
        qr.innerText='';
        i.classList.remove('is-invalid');
        document.querySelector('#CompletFactuer').classList.remove('disabled')
        document.querySelector('#orders-paid-tab').classList.remove('disabled')
    }

}
