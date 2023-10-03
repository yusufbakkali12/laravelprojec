

var BonCom=''


toast = document.querySelector(".toastt");
(closeIcon = document.querySelector(".close")),
  (progress = document.querySelector(".progress"));
closeIcon.addEventListener("click", () => {
    toast.classList.remove("active");

    setTimeout(() => {
      progress.classList.remove("active");
    }, 300);

    clearTimeout(timer1);
    clearTimeout(timer2);
  });
  let timer1, timer2;
function insertObjectBonCom(){
        // creation object bonCom pour util sur Api



        toast.classList.add("active");
        progress.classList.add("active");

        timer1 = setTimeout(() => {
          toast.classList.remove("active");
        }, 5000); //1s = 1000 milliseconds

        timer2 = setTimeout(() => {
          progress.classList.remove("active");
        }, 5300);

         BonCom={
            numBonCo: 0,
            data: '',
            status: null,
            vehicules: []
        }

        var getnumBonCo=''
        async function geeetdata() {
            const myObject = await axios.get("http://127.0.0.1:8000/api/BonCom").then(res=>res.data)
            getnumBonCo = await myObject;
            BonCom.numBonCo=getnumBonCo.data[getnumBonCo.data.length-1].id+1

        }
    geeetdata();




    BonCom.data=document.querySelector('#BonCom_date').value
    document.querySelector('#BonCom_Show_date').innerText=BonCom.data
    let vehicule=[]
    document.querySelectorAll('#BonCom_Car').forEach((Item) => {vehicule=[...vehicule,Item]})
    vehicule.map(i=>{
        BonCom.vehicules.push({
            vehicle: i.value,
            status: null,
            Designation: []
        })
    })
    let Desi=[]
    document.querySelectorAll('#zoneProdut_bonCom').forEach((Item) =>{Desi= [...Desi,Item]})
    Desi.forEach((e,it)=>{
        let Qte=[]
        let Designat=[]
        let Reference=[]
        let Marce=[]
        e.querySelectorAll('#BonCom_Qte').forEach(q=>{Qte=[...Qte,q.value]})
        e.querySelectorAll('#BonCom_Reference').forEach(iw=>{Reference=[...Reference,iw.value]})
        e.querySelectorAll('#BonCom_Marce').forEach(it=>{Marce=[...Marce,it.value]})
        e.querySelectorAll(`.select-btn > span`).forEach((us) => {Designat=[...Designat,us.innerText]})
        let cmp=Math.max(Qte.length,Designat.length,Reference.length,Marce.length)
        for(let i =0;i<cmp;i++){
            BonCom.vehicules[it].Designation.push({
                Qte: Qte[i],
                Designation: Designat[i],
                Reference: Reference[i],
                Marce: Marce[i],
        })
        }
    })

    console.log(BonCom)







const zoneTable=document.querySelector('#ZoneTable')
BonCom.vehicules.map(e=>{
    const div = document.createElement("div");
    var tbody=''
    e.Designation.map(i=>{
        tbody +=`
        <tr>
            <th scope="col" class="col-1 py-0">${i.Qte}</th>
            <th scope="col" class="col-5 py-0">${i.Designation}</th>
            <th scope="col" class="col-2 py-0">${i.Reference}</th>
            <th scope="col" class="col-2 py-0">${i.Marce}</th>
        </tr>`
    })
    div.innerHTML =`<table class=" table table-bordered  border  border-2 border-info text-center p-0" '>
    <thead style="font-size:14px" >
    <tr>
        <th scope="col" colspan="4" class="col-1 py-0 table-info" id="Show_nomCar">${e.vehicle}</th>

    </tr>
     <tr>
        <th scope="col" class="col-1 py-0">Qté</th>
        <th scope="col" class="col-5 py-0">Designation</th>
        <th scope="col" class="col-2 py-0">Reference</th>
        <th scope="col" class="col-2 py-0">Marce</th>
    </tr>
    </thead >
    <tbody id='tbody'  style="font-size:11px ">
    ${tbody}
    </tbody>
    </table>`
    zoneTable.appendChild(div);
})


document.querySelector('#orders-paid-tab').classList.remove('disabled')
// document.querySelector('#btn_imprimyCom').classList.remove('disabled')


}

document.getElementById('orders-all-tab').addEventListener('click',()=>{
    document.querySelector('#orders-paid-tab').classList.add('disabled')
})
async function SaveBonCom(){
    await axios.post("http://127.0.0.1:8000/api/BonCom",BonCom)
            .then(res=>{console.log(res)})
            .catch(err=>{console.log(err)})
}
