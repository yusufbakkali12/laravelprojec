var addZone = document.getElementById('addZone');
var zoneProdut = document.getElementById('zoneProdut');
    addZone.addEventListener('click', function () {
      const div=document.createElement('div');
      div.innerHTML=`
      <div class="row mb-1">
        <!-- rowSelect -->
        <div class="col-sm-4 px-1">

          <!-- ###########select############ -->
          <div class="wrapper" >
            <div class="select-btn" onclick="FselectBtn(this)">
              <span>Select Product</span>
              <i class="uil uil-angle-down"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
              <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg></i>

            </div>
            <div class="content col-sm-4">
              <div class="search">
                <i class="uil uil-search"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></i>
                <input id="search-input" spellcheck="false" type="text" placeholder="Search">
              </div>
              <ul class="options ps-0"></ul>
            </div>
          </div>
          <!-- ###########select############ -->

        </div>

        <div class="col-sm-1 px-1">
          <div class="input-group" >
          <!-- !####### input prix ########  -->
              <input type="number" name="Qte" class="form-control" id="Qte" placeholder="Qté" onkeyup="calculeQte(this)">
          <!-- !####### input prix ########  -->
          </div>
        </div>

        <div class="col-sm-1 px-1">
          <select name="Unite" id="Unite" class=" form-select">
            <option value="Piece">Piece</option>
            <option value="Litter">Litter</option>
            <option value="Faire">Faire</option>
          </select>
        </div>

        <div class="col-sm-3 px-1">
          <div class="input-group">
            <input type="number" name="PrixUniter[]" class="form-control" id="PrixUniter" placeholder="Prix Uniter" onkeyup="calculePrixUniter(this)">
            <span class="input-group-text">DH</span>
          </div>
        </div>

        <div class="col-sm-2 px-1 ">
          <div class="input-group ">
            <input type="text" name="PrixTotal" class="form-control border border-2" id="PrixTotal" placeholder="Prix Total" value='' readonly>
            <span class="input-group-text">DH</span>
          </div>
        </div>

        <div class="col-sm-1 ">
        <button type='button' class="btn btn-primary text-white rounded-5 px-3 text-nowrap" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Suppreme line"
                                                    onclick='deletZoneProdute(this)'>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
            </svg> Sup
        </button>
        </div>

      </div>`
    zoneProdut.appendChild(div);

    })




