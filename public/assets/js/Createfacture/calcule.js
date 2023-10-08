

// import  n2words  from './n2words'




const d=new Date()
var object_facture = ''


const toast = document.querySelector(".toastt");
const closeIcon = document.querySelector(".close");
const progress = document.querySelector(".progress");
closeIcon.addEventListener("click", () => {
    toast.classList.remove("active");
    setTimeout(() => {
      progress.classList.remove("active");
    }, 300);
    clearTimeout(timer1);
    clearTimeout(timer2);
});
let timer1, timer2;

function alertSuc(){
// ? alert suc
toast.classList.add("active");
progress.classList.add("active");
timer1 = setTimeout(() => {toast.classList.remove("active");}, 5000); //1s = 1000 milliseconds
timer2 = setTimeout(() => {progress.classList.remove("active");}, 5300);
// ? alert suc
}


 // insert in show factuer
 function filter(){
    let Designation=[]
    let PrixTotal=[]
    let PrixUniter=[]
    let Qte=[]
    let Unite=[]
    document.querySelectorAll(`.select-btn > span`).forEach((userItem) => {Designation=[...Designation,userItem.innerText]})
    document.querySelectorAll('#PrixUniter').forEach((userItem) => {PrixUniter=[...PrixUniter,userItem.value]})
    document.querySelectorAll('#PrixTotal').forEach((userItem) => {PrixTotal=[...PrixTotal,userItem.value]})
    document.querySelectorAll('#Qte').forEach((userItem) => {Qte=[...Qte,userItem.value]})
    document.querySelectorAll('#Unite').forEach((userItem) => {Unite=[...Unite,userItem.value]})
    if(Designation.length === PrixTotal.length && PrixUniter.length === Qte.length ){
        // insert values in body object
        for(let i=0;i<Designation.length;i++){
            object_facture.body.push({
                Designation: Designation[i],
                Qte: Qte[i],
                Unite: Unite[i],
                PrixUniter:PrixUniter[i],
                PrixTotal: PrixTotal[i],
            },)
        }
    }

}


function insertObject(){

    object_facture = {
        header:{
            numFacture:'',
            date:'',
            objectCar:'',
            modelCar:'',
            matriqulCar:'',
            kilometrageCar:'',
        },
        body:[],
        footer:{
            MontantHT:"",
            MontantTVA:"",
            MontantTTC:"",
        }
    }


    // footer factures
    object_facture.footer.MontantHT=document.querySelector(`#montantHt`).value
    object_facture.footer.MontantTVA=document.querySelector(`#montantTv`).value
    object_facture.footer.MontantTTC=document.querySelector(`#montantTTC`).value
    // footer


    // insert in show factuer
    document.querySelector(`#Show_montantHt`).innerText=object_facture.footer.MontantHT
    document.querySelector(`#Show_montantTv`).innerText=object_facture.footer.MontantTVA
    document.querySelector(`#Show_montantTTC`).innerText=object_facture.footer.MontantTTC
    document.querySelector(`#Show_zoneSome`).innerText= document.querySelector('#zoneSome').innerText



    filter()


    alertSuc()

    // ? insert in header object facture
    object_facture.header['numFacture']='F'+'/'+document.querySelector(`#numFacture`).value+'/'+(d.getMonth()+1)+((''+d.getFullYear()).substr(2))
    let header=['date','modelCar','objectCar','matriqulCar','kilometrageCar']
    header.map(i=>{object_facture.header[i]=document.querySelector(`#${i}`).value})
    // ? insert in header object facture




    document.querySelector(`#Show_numFacture`).innerText=object_facture.header.numFacture
    document.querySelector(`#Show_date`).innerText=object_facture.header.date
    document.querySelector(`#Show_objectCar`).innerText=object_facture.header.objectCar
    document.querySelector(`#Show_modelCar`).innerText=object_facture.header.modelCar
    document.querySelector(`#Show_matriqulCar`).innerText=object_facture.header.matriqulCar.toUpperCase()
    document.querySelector(`#Show_kilometrageCar`).innerText=object_facture.header.kilometrageCar+' KM'

    var zoneProdut = document.getElementById('tbody');
    zoneProdut.innerHTML=' '
    // console.log(zoneProdut.innerHTML)
    // console.log(object_facture.body)
    object_facture.body.map(e=>{
        const div=document.createElement('tr');
        div.innerHTML=`
        <td class="py-0">${e.Designation}</td>
        <td class="py-0">${e.Qte}</td>
        <td class="py-0">${e.Unite}</td>
        <td class="py-0">${e.PrixUniter} dh</td>
        <td class="py-0">${e.PrixTotal} dh</td>`
        zoneProdut.appendChild(div);
    })


    document.querySelector('#btn_save').classList.remove('disabled')
    document.querySelector('#btn_imprimy').classList.remove('disabled')


}


async function SaveFactuer(){

    try{
        await axios.post("http://127.0.0.1:8000/api/factuers",object_facture)
        .then(res=>{console.log(res)})
        .catch(err=>{console.log(err)})
        }
    catch(err){
        if(err.response.status===404){
            console.error('Data not found');
        }else{
            console.error(err)
            console.error('500')
        }
    }


}












function calculeQte(e){
    let qte=e.value
    let prixuniter=e.parentElement.parentElement.parentElement.querySelector('#PrixUniter').value
    e.parentElement.parentElement.parentElement.querySelector('#PrixTotal').value = (qte*prixuniter).toFixed(2)
}

function calculePrixUniter(e){
    let prixuniter=e.value
    let qte=e.parentElement.parentElement.parentElement.querySelector('#Qte').value
    e.parentElement.parentElement.parentElement.querySelector('#PrixTotal').value = (qte*prixuniter).toFixed(2)
    calculeprixTotal()
}


let tot=document.querySelector('#montantTTC').value.split(' ')
// console.log(typeof(parseFloat(tot[0])))
// console.log(parseFloat(tot[0]))
// // document.querySelector('#zoneSome').innerText= n2words((parseFloat(tot[0])), {lang: 'fr'})
 document.querySelector('#zoneSome').innerText=n2words((parseFloat(tot[0])), {lang: 'fr'})
function calculeprixTotal(){
    let PrixTotal=document.querySelectorAll('#PrixTotal')
    let i=0
    PrixTotal.forEach((userItem) => {
        i+=+userItem.value
        var total=i
        document.querySelector('#montantHt').value=total.toFixed(2)+' DH'
        document.querySelector('#montantTv').value=(total*0.2).toFixed(2)+' DH'
        document.querySelector('#montantTTC').value=(total+total*0.2).toFixed(2)+' DH'
        document.querySelector('#zoneSome').innerHTML=n2words((total+total*0.2), {lang: 'fr'})
        document.querySelector('#zoneSome').value=n2words((total+total*0.2), {lang: 'fr'})
    });


  }






