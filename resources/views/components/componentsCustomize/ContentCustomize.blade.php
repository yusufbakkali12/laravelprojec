<div class="tab-content border border-dashed  rounded-5  shadow-sm overflow-hidden tab-pane fade show active " id="customfile">

    <nav id="orders-table-tab" class="orders-table-tab rounded-5 app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-2 border border-dashed  px-3  shadow-sm m-3">
        <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#creationFactuer" role="tab" aria-controls="orders-all" aria-selected="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
              </svg>
              Customize file
        </a>
        <a class="flex-sm-fill text-sm-center nav-link"   id="orders-paid-tab" data-bs-toggle="tab" href="#ShowFactuer" role="tab" aria-controls="orders-paid" aria-selected="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
            </svg>
              Show
        </a>
    </nav>


    <!--  //creation-->
        <div class="tab-pane fade show active" id="creationFactuer" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="col-12 ">
                <div class="app-card app-card-chart h-100 ">




                    {{-- <div class="app-card-header p-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h4 class="app-card-title p-1">Creation Factuer</h4>
                            </div>
                            <!--//col-->
                            <div class="col-auto">
                                <div class="card-header-action">

                                    <a href="#">More</a>
                                </div>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div> --}}


                    <div class="app-card-body p-2 p-lg-3 row">

                        <div class="col-4">

                            <h3 class="text-center"  >{{__("Add field")}}</h3>
                            <label for="libel" class=" d-flex align-items-center justify-content-between my-2">Libel <input id="libel" class="  form-control w-75" name="libel" type="text"></label>
                            <label for="type" class=" d-flex align-items-center justify-content-between my-2">type
                                                <select name="type" class="  form-select w-75" id="type">
                                                    <option value="text">Text</option>
                                                    <option value="number">Number</option>
                                                    <option value="select">Select</option>
                                                    <option value="date">date</option>
                                                </select>
                            </label>
                            <label for="value" class=" d-flex align-items-center justify-content-between my-2">Value default<input class="form-control w-75"  id="value" type="text"></label>
                            <div class="d-flex align-items-center justify-content-center  ">
                                <label for="obliged" class=" d-flex align-items-center justify-content-center  my-2">obliged <input class=" form-check-input  mx-2"  id="obliged" type="checkbox"></label>
                                <label for="showIt" class=" d-flex align-items-center justify-content-center  my-2">Show lable<input class=" form-check-input  mx-2" @checked(true) id="showIt" type="checkbox" ></label>

                            </div>
                            <button type="button" class="btn btn-info text-light mt-2 rounded rounded-4" id="create" >create</button>
                            <div id='affiche' class="border my-2 p-2"></div>
                        </div>


                        <form
                        {{-- action="{{route('customerFactuer.store')}}" method="POST"  --}}
                        class="col-8 selectallinput">
                            @csrf
                            <fieldset class=" border px-3">
                                    <legend class="rest fs-4"  style="all:revert">
                                        <input type="text" name="nametemplent" class="form-control  @error('nametemplent') is-invalid @enderror"
                                        placeholder="Name Template" value="">
                                    </legend>
                                    @error('nametemplent')
                                        <p class=" small text-primary">{{ $message }}</p>
                                    @enderror



                            <!-- ########### header ############## -->
                                <fieldset class=" shadow-sm border border-dashed rounded-4 px-4 shadow-sm rest" style="all:revert" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <legend class="rest fs-4"  style="all:revert">
                                            header
                                    </legend>
                                    <div class="row py-2">







                                    <div class=" py-2">
                                        <div class="d-flex justify-content-between row ">

                                            <div class="  col-6 m-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="m-0 text-nowrap  fw-bold col-5">Facture N°:</label>
                                                    <input type="number" class="form-control " obliged="obliged"  id="numFacture" name='numFacture' onkeyup="check_numFacture(this)">
                                                </div>
                                                <span class="small text-primary text-end" id="msgErr"></span>
                                            </div>

                                            <div class="d-flex align-items-center col-6 m-0">
                                                <label for="date" class="form-label m-0 fw-bold col-5">Date<span class="text-primary">*</span>:</label>
                                                <input type="date" class="form-control " obliged="obliged" id="date" name="date" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" ">
                                        <div class=" ">
                                            <div class="mb-2  row ">
                                                <div class="d-flex align-items-start col-6 m-0 ">
                                                    <label for="objectCar" class="form-label  fw-bold col-5">Subject <span class="text-primary">*</span> :<button type="button" class="btn m-0 p-0 text-info text-decoration-underline" data-bs-toggle="modal" data-bs-target="#AjouteDesignation">(Add Subj)</button></label>
                                                    <select class="form-select selectpicker " id="objectCar" data-live-search="true" obliged="obliged" name="objectCar">
                                                        <option value="">choisi Objet</option>
                                                        <option value="Achat de pièces de recharge et reparation du véhicule">Achat de pièces de recharge et reparation du véhicule
                                                        </option>
                                                        <option value="Achat de pièces de recharge et reparation du véhicule">Achat de pièces de recharge et reparation du véhicule
                                                        </option>
                                                        <option value="Achat de pièces de recharge et reparation du véhicule">Achat de pièces de recharge et reparation du véhicule
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center col-6 m-0">
                                                    <label for="modelCar" class="form-label fw-bold col-5">Véhicule:</label>
                                                    <input type="text" class="form-control" id="modelCar" name="modelCar" obliged="obliged">
                                                </div>
                                            </div>

                                            <div class="mb-2 d-flex justify-content-between row ">
                                                <div class="d-flex align-items-center col-6 m-0">
                                                    <label for="matriqulCar" class="form-label m-0 fw-bold col-5" >Matriqul<span class="text-primary">*</span>:</label>
                                                    <input type="text" class="form-control  text-uppercase " id="matriqulCar" name="matriqulCar" obliged="obliged">
                                                </div>
                                                <div class="d-flex align-items-center m-0 col-6" aria-autocomplete="0">
                                                    <label for="kilometrageCar" class="form-label fw-bold col-5">kilometrage:</label>
                                                    <input type="number" class="form-control  text-uppercase " name="kilometrageCar" id="kilometrageCar">
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </fieldset>
                            <!-- ########### header ############## -->




                                <!-- ########### body ############## -->
                                <fieldset class="row  p-3 justify-content-around shadow-sm border border-dashed rounded-4 m-1 shadow-sm rest" id="zoneProdut" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <legend class="rest fs-4"  style="all:revert">
                                        body
                                    </legend>
                                    <div>
                                        <div class="row">
                                            <div class="col-4">
                                                <label class="form-label  fw-bold">Designation<span class="text-primary">*</span></label>
                                                <button type="button" class="btn m-0 p-0 text-info text-decoration-underline" data-bs-toggle="modal" data-bs-target="#AjouteDesignation">(Add Desig)</button>
                                            </div>

                                            <div class="col-1 p-0">
                                                <label class="form-label fw-bold">Qté<span class="text-primary">*</span></label>
                                            </div>
                                            <div class="col-1 ">
                                                <label class="form-label fw-bold">Unite<span class="text-primary">*</span></label>
                                            </div>
                                            <div class="col-3">
                                                <label class="form-label fw-bold">Prix Uniter<span class="text-primary">*</span></label>
                                            </div>
                                            <div class="col-3">
                                                <label class="form-label fw-bold">Prix total</label>
                                            </div>
                                        </div>
                                    </div>





                                </fieldset>
                                <div class="p-3">
                                        <button class="btn btn-info  text-white  rounded-5 px-3" id="addZone" onclick="addto()" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-circle fw-bold" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                                            </svg> Plus
                                        </button>
                                    </div>
                                <!-- ########### body ############## -->




                                <fieldset class=" shadow-sm border border-dashed rounded-4 px-4 shadow-sm rest" style="all:revert" ondrop="drop(event)" ondragover="allowDrop(event)" >
                                    <legend class="rest fs-4"  style="all:revert">
                                            Footer
                                    </legend>
                                    <div class="row p-3 col-10 col-sm-8 col-md-6  col-xl-4 ms-auto ">
                                        <div class="mb-3 d-flex">
                                            <div class="col-4 my-auto">
                                                <p class="text-nowrap my-0 fw-bold">Montant H.T :</p>
                                            </div>
                                            <div class="col-6 ms-auto">
                                                <input id="montantHt" name="montantHt" type="text" readonly="" class="form-control">
                                            </div>

                                        </div>
                                        <div class="mb-3 d-flex ">
                                            <div class="col-4 col-md-4 my-auto">
                                                <p class="text-nowrap my-0 fw-bold"> Montant T.V.A20%:</p>
                                            </div>
                                            <div class="col-6 ms-auto">
                                                <input id="montantTv" name="montantTv" type="text" readonly="" class="form-control">
                                            </div>

                                        </div>
                                        <div class="mb-3 d-flex">
                                            <div class="col-4 my-auto">
                                                <p class="text-nowrap my-0 fw-bold">Montant T.T.C :</p>
                                            </div>
                                            <div class="col-6 ms-auto">
                                                <input id="montantTTC" name="montantTTC" type="text" readonly="" class="form-control">
                                            </div>

                                        </div>
                                    </div>


                                    <div class="">
                                        <p class="small d-flex align-items-center">Arrêté la présente factuer à la somme de <input type="text" name="montant"  id="zoneSome" class="fw-bold form-control form-control-sm w-auto " disabled> dirhams ttc.</p>

                                    </div>
                                </fieldset>

                                <div class="m-3">
                                    <button class="btn btn-warning text-white rounded-5 px-3" id="Save tempe " type="button" onclick='senderCustomizeFile()'
                                    {{-- data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip"
                                    data-bs-title="This top tooltip is themed via CSS variables." --}}
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                        </svg>
                                        Save templent
                                    </button >
                                </div>

                            </fieldset>
                        </form>
                        <script src="{{ asset('assets/js/Customizefile.js') }}"></script>
                        <script src="{{ asset('assets/js/senderCustomizeFile.js') }}"></script>
                    </div>


                    <!--//app-card-body-->
                </div>


                <!--//app-card-->
            </div>


        </div>
    <!--//creation-->






    <!--//Show-->
    <div class="tab-pane fade " id="ShowFactuer" role="tabpanel" aria-labelledby="orders-paid-tab">

        <div class="col-12 ">
            <div class="app-card app-card-chart h-100 shadow-sm">

                <div class="app-card-header p-3  border border-bottom">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h4 class="app-card-title ">Show Factuer</h4>
                        </div>
                        <!--//col-->
                        <div class="col-auto">
                            <div class="card-header-action">
                                    <style>
                                    @media print {.divhiden{display:none;}}
                                    </style>
                                    <div class=" m-0 divhiden " >
                                        <button class="btn btn-success text-white rounded-5 px-3 disabled" id="btn_save" onclick="SaveFactuer()" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                                                <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                            </svg>
                                            Save
                                        </button>
                                        <button class="btn btn-info text-white rounded-5 px-3 disabled" id="btn_imprimy" onclick="printDiv('divprinter')" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                                <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"></path>
                                                <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"></path>
                                            </svg>
                                            imprime
                                        </button>
                                        <script>

                                        </script>
                                    </div>


                            </div>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>

                <div class="d-flex justify-content-center bg-body">
                    <div class="border m-4   position-relative shadow-sm" id="divprinter" style="width: 21cm;min-height: 29.7cm; ">
                        <div class=" px-5 my-3 ">
                                <h1 class="fw-bold text-center">STE.OUARCHATE <span style="text-decoration:underline;text-decoration-style:wavy;text-decoration-color:#C53F3F"> AL ASDIQAE.SARL</span></h1>
                                <p  class="  text-center">TOLIER/ENTRETIEN ET REPARATION DES VEHICULES ET NEGOCIANT </p>
                        </div>
                        <div class="  border border-dashed  mx-5 mb-4 ">
                            <div class="row p-3">
                                <div class="d-flex justify-content-between">

                                    <div class="">
                                        <div class=" d-flex align-items-center ">
                                            <p class="m-0 text-nowrap me-3 fw-bold ">Facture N°: <span class=" fw-semibold" id="Show_numFacture">F/2/233</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center ms-3">
                                        <p  class="form-label m-0 fw-bold">Date :<span class="fw-semibold" id="Show_date">3/30/2023</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="d-flex align-items-center ">
                                    <div class="d-flex align-items-center mx-auto">
                                        <p class="form-label m-0 fw-bold small text-center">Objet :
                                            <span id="Show_objectCar" class=" fw-normal">Achat de pièces de recharge et reparation du véhicule </span>
                                            <span id="Show_modelCar" class=" fw-semibold text-center">SKODA </span><br>
                                            <span id="Show_modelCar" class=" fw-normal">a matriqul</span>
                                            <span id="Show_matriqulCar" class="text-decoration-underline">0000/A/78</span>,
                                            <span id="Show_kilometrageCar" class="fw-normal text-center">10200 KM</span>
                                        </p>

                                    </div>


                                </div>
                            </div>
                        </div>


                            <!-- ########### zoneProdut############## -->
                        <div class=" px-5 ">
                                <table class=" table table-bordered  border-info text-center p-0" '>
                                    <thead style="font-size:14px" >
                                    <tr>
                                        <th scope="col" class="col-5 py-0">Designation</th>
                                        <th scope="col" class="col-1 py-0">Qté</th>
                                        <th scope="col" class="col-1 py-0">Unite</th>
                                        <th scope="col" class="col-2 py-0">Prix Uniter</th>
                                        <th scope="col" class="col-2 py-0">Prix Total</th>
                                    </tr>
                                    </thead >
                                    <tbody id='tbody'  style="font-size:11px ">
                                        <tr>
                                            <td class="py-0">Select Product</td>
                                            <td class="py-0">0</td>
                                            <td class="py-0">Piece</td>
                                            <td class="py-0">0</td>
                                            <td class="py-0">0</td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>



                            <div class=" d-flex justify-content-end  px-4">
                                <div class="col-4">
                                    <div class="my-0">
                                        <p class="text-nowrap my-0 small">Montant H.T : <span id="Show_montantHt">00000</span></p>
                                    </div>
                                    <div class="my-0">
                                        <p class="text-nowrap my-0 small"> Montant T.V.A<span class="fw-semibold">20%</span>: <span id="Show_montantTv">00000</span></p>
                                    </div>
                                    <div class="my-0">
                                        <p class="text-nowrap my-0 small">Montant T.T.C : <span id="Show_montantTTC"class=" fw-bold">0000</span></p>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-1 w-75 mx-auto">
                            <div class="pb-2 mx-5">
                                <p class="" style="font-size:8pt;">Arrêté la présente facture à la somme de <span id="Show_zoneSome" class="fw-bold"></span> dirhams ttc.</p>
                                <p class=" mt-0 mb-5 me-5 text-end small">Cachet et Signature :</p>
                            </div>
                            <div class="d-flex justify-content-center align-content-center position-absolute " style="top:91%;right: 11%;">
                                <div class=" app-card-thumb mx-auto">
                                    <img height="80" src="{{asset("assets/images/frame.png")}}" alt="QR code">
                                </div>
                                <div class="my-auto ms-3">
                                    <p class="my-0 text-center " style="font-size:11px;">ARDE BOUGRINE BOUDAROUA CR BNI KOLLA CAIDAT SIDI REDOUANE TEL : 0671104716</p>
                                    <p class="my-0  text-center" style="font-size:11px;">R.C N° :441/Patente N°:22177789/I.F N°:32610045/CNSS N°:8694904/ Agrément 2685</p>
                                    <p class="my-0  text-center" style="font-size:11px;">ICE : 001649143000019  Compte N° : 181 341 21211 9414372 001 0 29 BP Ouazzane </p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--//Show-->




</div>