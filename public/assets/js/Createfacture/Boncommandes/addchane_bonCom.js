








function addZone_bonCom(e) {
    const zoneProdut_bonCom =
        e.parentElement.parentElement.querySelector("#zoneProdut_bonCom");

    const div = document.createElement("div");
    div.innerHTML = `
      <div class="row mb-1">
      <!-- rowSelect -->
      <div class="col-sm-1 px-1">
          <div class="input-group">
              <!-- ! ####### input prix ########  -->
              <input type="text" name="Qte" class="form-control"
              id="BonCom_Qte" placeholder="Qté" >
              <!-- !####### input prix ########  -->
          </div>
      </div>
      <div class="col-sm-4 px-1">

          <!-- ###########select############ -->
          <div class="wrapper">
              <div class="select-btn" onclick="FselectBtn(this)">
                  <span>Select Product</span>
                  <i class="uil uil-angle-down"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                      <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg></i>
              </div>
              <div class="content">
                  <div class="search">
                      <i class="uil uil-search">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                      </i>
                      <input id="search-input" spellcheck="false" type="text"
                          placeholder="Search">
                  </div>
                  <ul class="options ps-0"></ul>
              </div>
          </div>
          <!-- ###########select############ -->
      </div>
      <div class="col-sm-3 px-1">
          <input type="text" name="Reference" class="form-control" id="BonCom_Reference" placeholder="Reference">
      </div>
      <div class="col-sm-3 px-1">
          <input type="text" name="Marce" class="form-control" id="BonCom_Marce" placeholder="Marque">
      </div>
      <div class="col-sm-1 ">
          <button type='button' class="btn btn-primary text-white rounded-5 px-3 text-nowrap"
              onclick='deletzoneProdut_bonCome(this)'>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                    <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"></path>
                </svg>
                Supp
          </button>
      </div>

  </div>`;
    zoneProdut_bonCom.appendChild(div);
}

function deletzoneProdut_bonCome(e) {
    e.parentElement.parentElement.remove();
    console.log("delete zone Produte");
}

const addZoneVehicule_bonCom = document.getElementById("addZoneVehicule_bonCom");
const zoneVehicule_bonCom = document.getElementById("zoneVehicule_bonCom");
addZoneVehicule_bonCom.addEventListener("click", function () {
    const div = document.createElement("div");

    div.innerHTML = `<div class="bg-body border border-dashed rounded-5 px-4 mb-3 shadow-sm">
                                    <div class="row ps-3 pt-3 pe-3 position-relative" >
                                        <button type="button"
                                        class="btn-close position-absolute translate-middle  bg-secondary bg-opacity-10 p-3 rounded-pill me-5" style="top: 8%; left:100%"
                                            onclick="deletzoneVehicule_bonCom(this)"></button>
                                        <div class="d-flex align-items-center col-4 mx-auto">

                                               <div>
                                                    <label for="BonCom_Car" class="form-label me-3 m-0 fw-bold">Véhicule<span
                                                    class="text-danger">*</span></label>
                                               </div>

                                                <select class="form-select" id="BonCom_Car" >
                                                    <option value="FIAT DUCATO">FIAT DUCATO</option>
                                                    <option value="FORD TRANSIT">FORD TRANSIT</option>
                                                    <option value="RENAULT MASTER">RENAULT MASTER</option>
                                                    <option value="DACIA LOGAN">DACIA LOGAN</option>
                                                    <option value="DACIA SANDERO STEPWAY">DACIA SANDERO STEPWAY</option>
                                                    <option value="DACIA DUSTER">DACIA DUSTER</option>
                                                    <option value="vDACIA SPRING">DACIA SPRING</option>
                                                </select>

                                        </div>

                                    </div>
                                    <!-- ########### zoneProdut############## -->
                                    <div class="row  p-3 justify-content-around" id="zoneProdut_bonCom">
                                        <div>
                                            <div class="row">
                                                <div class="col-1 p-0 ms-1">
                                                    <label class="form-label fw-bold">Qté<span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-4">
                                                    <label class="form-label  fw-bold">Designation<span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label fw-bold">Reference<span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label fw-bold">Marque</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row mb-1">
                                                <!-- rowSelect -->
                                                <div class="col-sm-1 px-1">
                                                    <div class="input-group">
                                                        <!-- ! ####### input prix ########  -->
                                                        <input type="text" name="Qte" class="form-control"
                                                        id="BonCom_Qte" placeholder="Qté">
                                                        <!-- !####### input prix ########  -->
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 px-1">

                                                    <!-- ###########select############ -->
                                                    <div class="wrapper">
                                                        <div class="select-btn" onclick="FselectBtn(this)">
                                                            <span>Select Product</span>
                                                            <i class="uil uil-angle-down"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                                </svg></i>
                                                        </div>
                                                        <div class="content">
                                                            <div class="search">
                                                                <i class="uil uil-search">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-search" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                                    </svg>
                                                                </i>
                                                                <input id="search-input" spellcheck="false"
                                                                    type="text" placeholder="Search">
                                                            </div>
                                                            <ul class="options ps-0"></ul>
                                                        </div>
                                                    </div>
                                                    <!-- ###########select############ -->
                                                </div>
                                                <div class="col-sm-3 px-1">
                                                    <input type="text" name="Reference" class="form-control" id="BonCom_Reference" placeholder="Reference">
                                                </div>
                                                <div class="col-sm-3 px-1">
                                                    <input type="text" name="Marce" class="form-control" id="BonCom_Marce" placeholder="Marque" >
                                                </div>
                                                <div class="col-sm-1 ">
                                                    <button type='button'
                                                        class="btn btn-primary text-white rounded-5 px-3 text-nowrap"
                                                        onclick='deletZoneProdute(this)'>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                                                                <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"></path>
                                                              </svg> Supp
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ########### zoneProdut############## -->
                                    <div class="p-3">
                                        <button class="btn btn-info  text-white  rounded-5 px-3" id="addZone_bonCom" onClick='addZone_bonCom(this)'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="currentColor" class="bi bi-plus-circle fw-bold"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path
                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                            </svg> Plus Designation
                                        </button>
                                    </div>

        </div>
        `;
        // div.classList.add("bg-body border border-dashed rounded-5 px-4");
    zoneVehicule_bonCom.appendChild(div);
});

function deletzoneVehicule_bonCom(e) {
    e.parentElement.parentElement.remove();
    console.log("delete zone Produte");
}




// async function SaveBonCom(){
//     await axios.post("http://127.0.0.1:8000/api/factuer",object_bonCom)
//     .then(res=>{console.log(res)})
//     .catch(err=>{console.log(err)})
// }





