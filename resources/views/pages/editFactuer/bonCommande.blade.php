@extends('layouts.app')

@section('content')
    @include('components.navbar')
    <!--//app-header-->


    <link href="https://unpkg.com/slim-select@latest/dist/slimselect.css" rel="stylesheet"></link>
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Overview</h1>


                <nav id="orders-table-tab" class="orders-table-tab rounded-5 app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-2 border border-dashed  px-3  shadow-sm">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#creationFactuer" role="tab" aria-controls="orders-all" aria-selected="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                            <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                            <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                          </svg>
                          Creation
                    </a>
				    <a class="flex-sm-fill text-sm-center nav-link disabled "   id="orders-paid-tab" data-bs-toggle="tab" href="#ShowFactuer" role="tab" aria-controls="orders-paid" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                        </svg>
                          Show
                    </a>
                </nav>


				<div class="tab-content border border-dashed  rounded-5  shadow-sm overflow-hidden" id="orders-table-tab-content">



{{-- model --}}
<div class="modal fade " id="AjouteVehicule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content app-card-body app-card">
        <div class="d-flex justify-content-end">
            Ajoute Vehicule
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
                <div class="col-12 ">
                    <div class="app-card app-card-account d-flex flex-column align-items-start">

                        <div class="app-card-body px-4 w-100">
                            <div class="item  py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">

                                        <div class="item-data"><img class="profile-image" src="assets/images/user.png" alt=""></div>
                                    </div><!--//col-->
                                    <div class="col text-end">
                                        <a class="btn-sm app-btn-secondary" href="#">Change</a>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->
                            <div class="item py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12">
                                        <div class="item-label"><strong>Vehicule</strong></div>
                                        <div class="item-data"><input type="text" class=' form-control'></div>
                                    </div><!--//col-->

                                </div><!--//row-->
                            </div><!--//item-->



                        </div><!--//app-card-body-->


                    </div><!--//app-card-->
                </div>




                <div class="m-3">
            <button type="button" class="btn app-btn-primary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info">Joute</button>

        </div>
    </div>
</div>
</div>
{{-- model --}}

                    <!--//creation-->
			        <div class="tab-pane fade show active " id="creationFactuer" role="tabpanel" aria-labelledby="orders-all-tab">
                        <div class="col-12 mb-4">
                            <div class="app-card app-card-chart h-100 shadow-sm">
                                <!--//app-card-header-->
                                <div class="app-card-header p-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <h4 class="app-card-title">Bon Commmandes</h4>
                                        </div>
                                        <!--//col-->
                                        <div class="col-auto">
                                            <div class="card-header-action">
                                                <a href="charts.html">More</a>
                                            </div>
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//app-card-header-->
                                <div class="app-card-body px-3  px-lg-4">

                                    <div class="row p-3 ">
                                        <div class="d-flex justify-content-between">

                                            <div class="d-flex align-items-center ms-2">
                                                <label for="cc-number" class="form-label m-0 fw-bold text-nowrap">ICE : 00 16 49 14 30 00 019</label>
                                            </div>
                                            <div class="d-flex align-items-center ms-2">
                                                <label for="cc-number" class="form-label m-0 fw-bold">Date<span
                                                        class="text-danger">*</span></label>
                                                <input type="date" class="form-control ms-3" id="BonCom_date">
                                            </div>


                                        </div>
                                        <div class="d-flex justify-content-center ">
                                        <button type='button'
                                                class="btn text-info text-nowrap"
                                                id="ajouteModalLabel" data-bs-toggle="modal"
                                                data-bs-target="#AjouteVehicule">(
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="18" height="18" fill="currentColor"
                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                                Ajoute Véhicule)
                                        </button>
                                        <button type='button'
                                            class="btn text-danger text-nowrap"
                                            id="ajouteModalLabel" data-bs-toggle="modal"
                                            data-bs-target="#AjouteDesignation">(
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="18" height="18" fill="currentColor"
                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                            Ajoute Designation)
                                        </button>
                                        </div>
                                    </div>


                                    {{-- zone Vehicule et Produt --}}
                                    <div id="zoneVehicule_bonCom" >
                                        <div>
                                            <div class="bg-body border border-dashed rounded-5 px-4 mb-3 shadow-sm">

                                                <!-- ########### zoneVéhicule############## -->
                                                <div class="row p-3 pb-0  position-relative">
                                                    <button type="button"
                                                        class="btn-close position-absolute translate-middle bg-secondary bg-opacity-10 p-3 rounded-pill me-5"
                                                        style="top: 8%; left:100%" onclick="deletzoneVehicule_bonCom(this)">
                                                    </button>
                                                    <div class="d-flex align-items-center col-4 mx-auto">
                                                        <label for="cc-number" class="form-label me-3 m-0 fw-bold">
                                                            Véhicule<span class="text-danger">*</span>
                                                        </label>
                                                        <select class=" form-select" id="BonCom_Car" >
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
                                                <!-- ########### zoneVéhicule ############## -->


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

                                                    <div id="zonePro">
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
                                                                <input type="text" name="Reference" class="form-control"
                                                                    id="BonCom_Reference" placeholder="Reference"
                                                                    >
                                                            </div>
                                                            <div class="col-sm-3 px-1">
                                                                <input type="text" name="Marce" class="form-control"
                                                                    id="BonCom_Marce" placeholder="Marce">
                                                            </div>
                                                            <div class="col-sm-1 ">
                                                                <button type='button'
                                                                    class="btn btn-primary text-white rounded-5 px-3 text-nowrap"
                                                                    onclick='deletZoneProdute(this)'>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser" viewBox="0 0 16 16">
                                                                        <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"></path>
                                                                    </svg>
                                                                    Supp
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- ########### zoneProdut############## -->
                                                {{-- button ajoute  --}}
                                                <div class="p-3 pt-0">
                                                    <button class="btn btn-info  text-white  rounded-5 px-3" id="addZone_bonCom" onClick='addZone_bonCom(this)'>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                            fill="currentColor" class="bi bi-plus-circle fw-bold" viewBox="0 0 16 16">
                                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                        </svg>
                                                        Plus Designation
                                                    </button>
                                                </div>
                                                {{-- button ajoute  --}}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- zone Vehicule et Produt --}}










                                    <div class=" text-center">
                                        <button class="btn btn-warning  text-white   rounded-5 px-3" id="addZoneVehicule_bonCom">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="currentColor" class="bi bi-plus-circle fw-bold" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path
                                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                            </svg> Ajoute Véhicule
                                        </button>
                                    </div>
                                    <hr class=" w-50 mx-auto">
                                    <div class="my-3">
                                        <button class="btn btn-warning text-white rounded-5 px-3" onclick="insertObjectBonCom()" id='kj'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                              </svg>
                                            Complet
                                        </button>

                                    </div>
                                </div>
                                <!--//app-card-body-->
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->
			        </div><!--//creation-->


                    <!--//Show Bon Commmandes-->
			        <div class="tab-pane fade " id="ShowFactuer" role="tabpanel" aria-labelledby="orders-paid-tab">

                        <div class="col-12 ">
                            <div class="app-card app-card-chart h-100 shadow-sm">

                            <div class="app-card-header p-3  border border-bottom">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h4 class="app-card-title ">Show Bon Commmandes</h4>

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <div class="card-header-action">

                                            <style>
                                                @media print {
                                                    .divhiden{
                                                      display:none;
                                                    }

                                                  }
                                                </style>
                                                <div class=" m-0 divhiden " >
                                                    <button class="btn btn-success text-white rounded-5 px-3 " onclick="SaveBonCom()"  >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-down" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                                                            <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                                          </svg>
                                                        Save
                                                    </button>
                                                    <button class="btn btn-info text-white rounded-5 px-3 " onclick="printDiv('divprinter')" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"></path>
                                                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"></path>
                                                          </svg>
                                                        imprime
                                                    </button>
                                                    <script>
                                                       async function printDiv(divName) {
                                                            var printContents =await document.getElementById(divName).innerHTML;
                                                             var originalContents = document.body.innerHTML;
                                                            document.body.innerHTML = printContents;
                                                            window.print();
                                                            document.body.innerHTML = originalContents;
                                                        }
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
                                                            <p class="m-0 text-nowrap me-3 fw-bold ">Bon Commmandes N°: <span class=" fw-semibold" id="Show_numFacture">F-233-12</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center ms-3">
                                                        <p  class="form-label m-0 fw-bold">Date :<span class="fw-semibold" id="BonCom_Show_date">3/30/2023</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-3">
                                                <div class="d-flex align-items-center ">
                                                    <div class="d-flex align-items-center mx-auto">
                                                        <p class="form-label m-0 fw-bold small">ICE : 00 16 49 14 30 00 019</p>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                            <!-- ########### zoneProdut############## -->
                                        <div class=" px-5 " id="ZoneTable">


                                        </div>







                                        <div class="d-flex justify-content-center align-content-center position-absolute " style="top:91%;right: 11%;">
                                                <div class=" app-card-thumb me-5">
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

			        </div><!--//Show-->


				</div><!--//tab-content-->






















            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->

        <!--//app-footer-->
        <div class="toastt bg-success bg-opacity-10">
            <div class="toastt-content ">
              <i class="fas fa-solid fa-check check"></i>

              <div class="message">
                <span class="text text-1">Success</span>
                <span class="text text-2">Your changes has been saved</span>
              </div>
            </div>
            <i class="fa-solid fa-xmark close"></i>
            <div class="progress active"></div>
        </div>
    </div>
    <!--//app-wrapper-->
    <script defer src="{{asset("assets/js/Createfacture/Boncommandes/calculeBonCom.js")}}"></script>
    <script defer src="{{ asset('assets/js/Createfacture/Boncommandes/addchane_bonCom.js') }}"></script>
@endsection
