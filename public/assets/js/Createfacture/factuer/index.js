function deletZoneProdute(e) {
    e.parentElement.parentElement.remove();
    console.log("delete zone Produte");
}




// !not work yet

// ?? get last number fucteurd
// var factuerApi = "";
// async function getnumFacture() {
//     try{
//         const Object = await axios.get("http://127.0.0.1:8000/api/factuer").then(res=>res.data)
//         factuerApi = await Object;
//         document.querySelector('#numFacture').value = factuerApi.data[factuerApi.data.length-1].id
//     }
//     catch(err){
//         if(err.response.status===404){
//             console.error('Data not found');
//         }else{
//             console.error(err)
//         }
//     }
//     // return SelectApi;
// }
// getnumFacture();
// ?? get last number fucteurd










// ! not  work yet
// const check_numFacture=(i)=>{
//     // console.log(i.value)
//     let t=[]
//     let qr=document.querySelector('#msgErr')

//     factuerApi.data.map(e=>{t=[...t,e.numFacture.split('/')[1]]})
//     const bool= t.some(e=>e==parseInt(i.value) )

//    if(bool){
//        qr.innerText='existe déjà';
//        console.log("hrl",i)
//        i.classList.add('is-invalid');
//        document.querySelector('#CompletFactuer').classList.add('disabled')
//        document.querySelector('#orders-paid-tab').classList.add('disabled')
//     }
//     else{
//         qr.innerText='';
//         i.classList.remove('is-invalid');
//         document.querySelector('#CompletFactuer').classList.remove('disabled')
//         document.querySelector('#orders-paid-tab').classList.remove('disabled')
//     }

// }
