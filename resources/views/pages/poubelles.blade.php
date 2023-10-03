@extends('layouts.app')

@section('content')
    @include('components.navbar')
    <!--//app-header-->



    <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
                <h1 class="app-page-title">Overview</h1>
			    <div class="row g-3 mb-3 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Poubelles</h1>
				    </div>

				    <div class="col-auto">
					     <div class="page-utilities">
                             <form class="">
						        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                    <div class="col-auto">
                                        <form class="table-search-form row gx-1 align-items-center">
                                            <div class="col-auto">
                                                <input type="month" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Recherche Client">
                                            </div>

                                        </form>

                                    </div><!--//col-->
                                    <div class="col-auto">
                                        <select class="form-select w-auto" >
                                            <option selected value="Tous">Tous</option>
                                            <option value="semaine">Cette Semaine</option>
                                            <option value="mois">Cette Mois</option>
                                            <option value="annee">Cette Annee</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Recherche</button>
                                    </div>

                                </div><!--//row-->
                            </form><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->


			    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-3 border border-dashed rounded-5 px-3  shadow-sm">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Factuer</a>
				    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Devies</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Bon Commend</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Bon Livresion</a>
				</nav>


				<div class="tab-content border border-dashed rounded-5  shadow-sm overflow-hidden" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table  mb-3">
						    <div class="app-card-body">


                                    <div class="row g-4 p-3">
                                        <!--//col-->
                                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                            <div class="app-card app-card-doc shadow-sm h-100">
                                                <div class="app-card-thumb-holder p-3">
                                                    <span class="icon-holder">
                                                        <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                            data-prefix="fas" data-icon="file-pdf" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                    </span>
                                                    <span class="badge bg-success">NEW</span>
                                                    <a class="app-card-link-mask" href="#file-link"></a>
                                                </div>
                                                <div class="app-card-body p-3 has-card-actions">

                                                    <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                    <div class="app-doc-meta">
                                                        <ul class="list-unstyled mb-0">
                                                            <li><span class="text-muted">Type:</span> Factuer</li>
                                                            <li><span class="text-muted">N :</span> F/234/423</li>
                                                            <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                        </ul>
                                                    </div>
                                                    <!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                            </path>
                                                                        </svg>
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                            </path>
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                            </path>
                                                                        </svg>Download</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                            </path>
                                                                        </svg>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--//dropdown-->
                                                    </div>
                                                    <!--//app-card-actions-->

                                                </div>
                                                <!--//app-card-body-->

                                            </div>
                                            <!--//app-card-->
                                        </div>
                                        <!--//col-->
                                        <!--//col-->
                                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                            <div class="app-card app-card-doc shadow-sm h-100">
                                                <div class="app-card-thumb-holder p-3">
                                                    <span class="icon-holder">
                                                        <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                            data-prefix="fas" data-icon="file-pdf" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                    </span>
                                                    <span class="badge bg-success">NEW</span>
                                                    <a class="app-card-link-mask" href="#file-link"></a>
                                                </div>
                                                <div class="app-card-body p-3 has-card-actions">

                                                    <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                    <div class="app-doc-meta">
                                                        <ul class="list-unstyled mb-0">
                                                            <li><span class="text-muted">Type:</span> Factuer</li>
                                                            <li><span class="text-muted">N :</span> F/234/423</li>
                                                            <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                        </ul>
                                                    </div>
                                                    <!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                            </path>
                                                                        </svg>
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                            </path>
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                            </path>
                                                                        </svg>Download</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                            </path>
                                                                        </svg>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--//dropdown-->
                                                    </div>
                                                    <!--//app-card-actions-->

                                                </div>
                                                <!--//app-card-body-->

                                            </div>
                                            <!--//app-card-->
                                        </div>
                                        <!--//col-->
                                        <!--//col-->
                                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                            <div class="app-card app-card-doc shadow-sm h-100">
                                                <div class="app-card-thumb-holder p-3">
                                                    <span class="icon-holder">
                                                        <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                            data-prefix="fas" data-icon="file-pdf" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                    </span>
                                                    <span class="badge bg-success">NEW</span>
                                                    <a class="app-card-link-mask" href="#file-link"></a>
                                                </div>
                                                <div class="app-card-body p-3 has-card-actions">

                                                    <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                    <div class="app-doc-meta">
                                                        <ul class="list-unstyled mb-0">
                                                            <li><span class="text-muted">Type:</span> Factuer</li>
                                                            <li><span class="text-muted">N :</span> F/234/423</li>
                                                            <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                        </ul>
                                                    </div>
                                                    <!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                            </path>
                                                                        </svg>
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                            </path>
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                            </path>
                                                                        </svg>Download</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                            </path>
                                                                        </svg>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--//dropdown-->
                                                    </div>
                                                    <!--//app-card-actions-->

                                                </div>
                                                <!--//app-card-body-->

                                            </div>
                                            <!--//app-card-->
                                        </div>
                                        <!--//col-->
                                        <!--//col-->
                                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                            <div class="app-card app-card-doc shadow-sm h-100">
                                                <div class="app-card-thumb-holder p-3">
                                                    <span class="icon-holder">
                                                        <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                            data-prefix="fas" data-icon="file-pdf" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                    </span>
                                                    <span class="badge bg-success">NEW</span>
                                                    <a class="app-card-link-mask" href="#file-link"></a>
                                                </div>
                                                <div class="app-card-body p-3 has-card-actions">

                                                    <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                    <div class="app-doc-meta">
                                                        <ul class="list-unstyled mb-0">
                                                            <li><span class="text-muted">Type:</span> Factuer</li>
                                                            <li><span class="text-muted">N :</span> F/234/423</li>
                                                            <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                        </ul>
                                                    </div>
                                                    <!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                            </path>
                                                                        </svg>
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                            </path>
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                            </path>
                                                                        </svg>Download</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                            </path>
                                                                        </svg>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--//dropdown-->
                                                    </div>
                                                    <!--//app-card-actions-->

                                                </div>
                                                <!--//app-card-body-->

                                            </div>
                                            <!--//app-card-->
                                        </div>
                                        <!--//col-->
                                        <!--//col-->
                                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                            <div class="app-card app-card-doc shadow-sm h-100">
                                                <div class="app-card-thumb-holder p-3">
                                                    <span class="icon-holder">
                                                        <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                            data-prefix="fas" data-icon="file-pdf" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                    </span>
                                                    <span class="badge bg-success">NEW</span>
                                                    <a class="app-card-link-mask" href="#file-link"></a>
                                                </div>
                                                <div class="app-card-body p-3 has-card-actions">

                                                    <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                    <div class="app-doc-meta">
                                                        <ul class="list-unstyled mb-0">
                                                            <li><span class="text-muted">Type:</span> Factuer</li>
                                                            <li><span class="text-muted">N :</span> F/234/423</li>
                                                            <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                        </ul>
                                                    </div>
                                                    <!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                            </path>
                                                                        </svg>
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                            </path>
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                            </path>
                                                                        </svg>Download</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                            </path>
                                                                        </svg>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--//dropdown-->
                                                    </div>
                                                    <!--//app-card-actions-->

                                                </div>
                                                <!--//app-card-body-->

                                            </div>
                                            <!--//app-card-->
                                        </div>
                                        <!--//col-->
                                        <!--//col-->
                                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                            <div class="app-card app-card-doc shadow-sm h-100">
                                                <div class="app-card-thumb-holder p-3">
                                                    <span class="icon-holder">
                                                        <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                            data-prefix="fas" data-icon="file-pdf" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                    </span>
                                                    <span class="badge bg-success">NEW</span>
                                                    <a class="app-card-link-mask" href="#file-link"></a>
                                                </div>
                                                <div class="app-card-body p-3 has-card-actions">

                                                    <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                    <div class="app-doc-meta">
                                                        <ul class="list-unstyled mb-0">
                                                            <li><span class="text-muted">Type:</span> Factuer</li>
                                                            <li><span class="text-muted">N :</span> F/234/423</li>
                                                            <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                        </ul>
                                                    </div>
                                                    <!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                            </path>
                                                                        </svg>
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                            </path>
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                            </path>
                                                                        </svg>Download</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                            </path>
                                                                        </svg>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--//dropdown-->
                                                    </div>
                                                    <!--//app-card-actions-->

                                                </div>
                                                <!--//app-card-body-->

                                            </div>
                                            <!--//app-card-->
                                        </div>
                                        <!--//col-->
                                        <!--//col-->
                                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                            <div class="app-card app-card-doc shadow-sm h-100">
                                                <div class="app-card-thumb-holder p-3">
                                                    <span class="icon-holder">
                                                        <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                            data-prefix="fas" data-icon="file-pdf" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                    </span>
                                                    <span class="badge bg-success">NEW</span>
                                                    <a class="app-card-link-mask" href="#file-link"></a>
                                                </div>
                                                <div class="app-card-body p-3 has-card-actions">

                                                    <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                    <div class="app-doc-meta">
                                                        <ul class="list-unstyled mb-0">
                                                            <li><span class="text-muted">Type:</span> Factuer</li>
                                                            <li><span class="text-muted">N :</span> F/234/423</li>
                                                            <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                        </ul>
                                                    </div>
                                                    <!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                            </path>
                                                                        </svg>
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                            </path>
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                            </path>
                                                                        </svg>Download</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                            </path>
                                                                        </svg>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--//dropdown-->
                                                    </div>
                                                    <!--//app-card-actions-->

                                                </div>
                                                <!--//app-card-body-->

                                            </div>
                                            <!--//app-card-->
                                        </div>
                                        <!--//col-->
                                        <!--//col-->
                                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                            <div class="app-card app-card-doc shadow-sm h-100">
                                                <div class="app-card-thumb-holder p-3">
                                                    <span class="icon-holder">
                                                        <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                            data-prefix="fas" data-icon="file-pdf" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                    </span>
                                                    <span class="badge bg-success">NEW</span>
                                                    <a class="app-card-link-mask" href="#file-link"></a>
                                                </div>
                                                <div class="app-card-body p-3 has-card-actions">

                                                    <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                    <div class="app-doc-meta">
                                                        <ul class="list-unstyled mb-0">
                                                            <li><span class="text-muted">Type:</span> Factuer</li>
                                                            <li><span class="text-muted">N :</span> F/234/423</li>
                                                            <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                        </ul>
                                                    </div>
                                                    <!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                            </path>
                                                                        </svg>
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                            </path>
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                            </path>
                                                                        </svg>Download</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                            </path>
                                                                        </svg>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--//dropdown-->
                                                    </div>
                                                    <!--//app-card-actions-->

                                                </div>
                                                <!--//app-card-body-->

                                            </div>
                                            <!--//app-card-->
                                        </div>
                                        <!--//col-->
                                         <!--//col-->
                                         <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                            <div class="app-card app-card-doc shadow-sm h-100">
                                                <div class="app-card-thumb-holder p-3">
                                                    <span class="icon-holder">
                                                        <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                            data-prefix="fas" data-icon="file-pdf" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                    </span>
                                                    <span class="badge bg-success">NEW</span>
                                                    <a class="app-card-link-mask" href="#file-link"></a>
                                                </div>
                                                <div class="app-card-body p-3 has-card-actions">

                                                    <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                    <div class="app-doc-meta">
                                                        <ul class="list-unstyled mb-0">
                                                            <li><span class="text-muted">Type:</span> Factuer</li>
                                                            <li><span class="text-muted">N :</span> F/234/423</li>
                                                            <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                        </ul>
                                                    </div>
                                                    <!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                            </path>
                                                                        </svg>
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                            </path>
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                            </path>
                                                                        </svg>Download</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                            </path>
                                                                        </svg>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--//dropdown-->
                                                    </div>
                                                    <!--//app-card-actions-->

                                                </div>
                                                <!--//app-card-body-->

                                            </div>
                                            <!--//app-card-->
                                        </div>
                                        <!--//col-->
                                        <!--//col-->
                                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                            <div class="app-card app-card-doc shadow-sm h-100">
                                                <div class="app-card-thumb-holder p-3">
                                                    <span class="icon-holder">
                                                        <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                            data-prefix="fas" data-icon="file-pdf" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                    </span>
                                                    <span class="badge bg-success">NEW</span>
                                                    <a class="app-card-link-mask" href="#file-link"></a>
                                                </div>
                                                <div class="app-card-body p-3 has-card-actions">

                                                    <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                    <div class="app-doc-meta">
                                                        <ul class="list-unstyled mb-0">
                                                            <li><span class="text-muted">Type:</span> Factuer</li>
                                                            <li><span class="text-muted">N :</span> F/234/423</li>
                                                            <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                        </ul>
                                                    </div>
                                                    <!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                            </path>
                                                                        </svg>
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                            </path>
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                            </path>
                                                                        </svg>Download</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                            </path>
                                                                        </svg>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--//dropdown-->
                                                    </div>
                                                    <!--//app-card-actions-->

                                                </div>
                                                <!--//app-card-body-->

                                            </div>
                                            <!--//app-card-->
                                        </div>
                                        <!--//col-->
                                        <!--//col-->
                                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                            <div class="app-card app-card-doc shadow-sm h-100">
                                                <div class="app-card-thumb-holder p-3">
                                                    <span class="icon-holder">
                                                        <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                            data-prefix="fas" data-icon="file-pdf" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                    </span>
                                                    <span class="badge bg-success">NEW</span>
                                                    <a class="app-card-link-mask" href="#file-link"></a>
                                                </div>
                                                <div class="app-card-body p-3 has-card-actions">

                                                    <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                    <div class="app-doc-meta">
                                                        <ul class="list-unstyled mb-0">
                                                            <li><span class="text-muted">Type:</span> Factuer</li>
                                                            <li><span class="text-muted">N :</span> F/234/423</li>
                                                            <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                        </ul>
                                                    </div>
                                                    <!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                            </path>
                                                                        </svg>
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                            </path>
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                            </path>
                                                                        </svg>Download</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                            </path>
                                                                        </svg>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--//dropdown-->
                                                    </div>
                                                    <!--//app-card-actions-->

                                                </div>
                                                <!--//app-card-body-->

                                            </div>
                                            <!--//app-card-->
                                        </div>
                                        <!--//col-->
                                        <!--//col-->
                                        <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                            <div class="app-card app-card-doc shadow-sm h-100">
                                                <div class="app-card-thumb-holder p-3">
                                                    <span class="icon-holder">
                                                        <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                            data-prefix="fas" data-icon="file-pdf" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                    </span>
                                                    <span class="badge bg-success">NEW</span>
                                                    <a class="app-card-link-mask" href="#file-link"></a>
                                                </div>
                                                <div class="app-card-body p-3 has-card-actions">

                                                    <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                    <div class="app-doc-meta">
                                                        <ul class="list-unstyled mb-0">
                                                            <li><span class="text-muted">Type:</span> Factuer</li>
                                                            <li><span class="text-muted">N :</span> F/234/423</li>
                                                            <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                        </ul>
                                                    </div>
                                                    <!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                    class="bi bi-three-dots-vertical" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                            </path>
                                                                        </svg>
                                                                    View</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                            </path>
                                                                        </svg>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                            </path>
                                                                        </svg>Download</a></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                            </path>
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                            </path>
                                                                        </svg>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--//dropdown-->
                                                    </div>
                                                    <!--//app-card-actions-->

                                                </div>
                                                <!--//app-card-body-->

                                            </div>
                                            <!--//app-card-->
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <nav class="app-pagination ">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>


						    </div><!--//app-card-body-->
						</div><!--//app-card-->


                        {{-- {{ $order->onEachSide(7)->links() }}<!--//app-pagination--> --}}



			        </div><!--//tab-pane-->

			        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
					    <div class="app-card app-card-orders-table mb-3">
						    <div class="app-card-body">


                                <div class="row g-4 p-3">
                                    <!--//col-->
                                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                        <div class="app-card app-card-doc shadow-sm h-100">
                                            <div class="app-card-thumb-holder p-3">
                                                <span class="icon-holder">
                                                    <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="file-pdf" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <span class="badge bg-success">NEW</span>
                                                <a class="app-card-link-mask" href="#file-link"></a>
                                            </div>
                                            <div class="app-card-body p-3 has-card-actions">

                                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                <div class="app-doc-meta">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><span class="text-muted">Type:</span> Factuer</li>
                                                        <li><span class="text-muted">N :</span> F/234/423</li>
                                                        <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                    </ul>
                                                </div>
                                                <!--//app-doc-meta-->

                                                <div class="app-card-actions">
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--//dropdown-toggle-->
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                        </path>
                                                                    </svg>
                                                                View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                        </path>
                                                                    </svg>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                        </path>
                                                                    </svg>Download</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                        </path>
                                                                    </svg>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--//dropdown-->
                                                </div>
                                                <!--//app-card-actions-->

                                            </div>
                                            <!--//app-card-body-->

                                        </div>
                                        <!--//app-card-->
                                    </div>
                                    <!--//col-->
                                    <!--//col-->
                                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                        <div class="app-card app-card-doc shadow-sm h-100">
                                            <div class="app-card-thumb-holder p-3">
                                                <span class="icon-holder">
                                                    <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="file-pdf" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <span class="badge bg-success">NEW</span>
                                                <a class="app-card-link-mask" href="#file-link"></a>
                                            </div>
                                            <div class="app-card-body p-3 has-card-actions">

                                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                <div class="app-doc-meta">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><span class="text-muted">Type:</span> Factuer</li>
                                                        <li><span class="text-muted">N :</span> F/234/423</li>
                                                        <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                    </ul>
                                                </div>
                                                <!--//app-doc-meta-->

                                                <div class="app-card-actions">
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--//dropdown-toggle-->
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                        </path>
                                                                    </svg>
                                                                View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                        </path>
                                                                    </svg>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                        </path>
                                                                    </svg>Download</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                        </path>
                                                                    </svg>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--//dropdown-->
                                                </div>
                                                <!--//app-card-actions-->

                                            </div>
                                            <!--//app-card-body-->

                                        </div>
                                        <!--//app-card-->
                                    </div>
                                    <!--//col-->
                                    <!--//col-->
                                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                        <div class="app-card app-card-doc shadow-sm h-100">
                                            <div class="app-card-thumb-holder p-3">
                                                <span class="icon-holder">
                                                    <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="file-pdf" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <span class="badge bg-success">NEW</span>
                                                <a class="app-card-link-mask" href="#file-link"></a>
                                            </div>
                                            <div class="app-card-body p-3 has-card-actions">

                                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                <div class="app-doc-meta">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><span class="text-muted">Type:</span> Factuer</li>
                                                        <li><span class="text-muted">N :</span> F/234/423</li>
                                                        <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                    </ul>
                                                </div>
                                                <!--//app-doc-meta-->

                                                <div class="app-card-actions">
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--//dropdown-toggle-->
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                        </path>
                                                                    </svg>
                                                                View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                        </path>
                                                                    </svg>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                        </path>
                                                                    </svg>Download</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                        </path>
                                                                    </svg>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--//dropdown-->
                                                </div>
                                                <!--//app-card-actions-->

                                            </div>
                                            <!--//app-card-body-->

                                        </div>
                                        <!--//app-card-->
                                    </div>
                                    <!--//col-->
                                    <!--//col-->
                                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                        <div class="app-card app-card-doc shadow-sm h-100">
                                            <div class="app-card-thumb-holder p-3">
                                                <span class="icon-holder">
                                                    <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="file-pdf" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <span class="badge bg-success">NEW</span>
                                                <a class="app-card-link-mask" href="#file-link"></a>
                                            </div>
                                            <div class="app-card-body p-3 has-card-actions">

                                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                <div class="app-doc-meta">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><span class="text-muted">Type:</span> Factuer</li>
                                                        <li><span class="text-muted">N :</span> F/234/423</li>
                                                        <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                    </ul>
                                                </div>
                                                <!--//app-doc-meta-->

                                                <div class="app-card-actions">
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--//dropdown-toggle-->
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                        </path>
                                                                    </svg>
                                                                View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                        </path>
                                                                    </svg>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                        </path>
                                                                    </svg>Download</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                        </path>
                                                                    </svg>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--//dropdown-->
                                                </div>
                                                <!--//app-card-actions-->

                                            </div>
                                            <!--//app-card-body-->

                                        </div>
                                        <!--//app-card-->
                                    </div>
                                    <!--//col-->
                                    <!--//col-->
                                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                        <div class="app-card app-card-doc shadow-sm h-100">
                                            <div class="app-card-thumb-holder p-3">
                                                <span class="icon-holder">
                                                    <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="file-pdf" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <span class="badge bg-success">NEW</span>
                                                <a class="app-card-link-mask" href="#file-link"></a>
                                            </div>
                                            <div class="app-card-body p-3 has-card-actions">

                                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                <div class="app-doc-meta">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><span class="text-muted">Type:</span> Factuer</li>
                                                        <li><span class="text-muted">N :</span> F/234/423</li>
                                                        <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                    </ul>
                                                </div>
                                                <!--//app-doc-meta-->

                                                <div class="app-card-actions">
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--//dropdown-toggle-->
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                        </path>
                                                                    </svg>
                                                                View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                        </path>
                                                                    </svg>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                        </path>
                                                                    </svg>Download</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                        </path>
                                                                    </svg>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--//dropdown-->
                                                </div>
                                                <!--//app-card-actions-->

                                            </div>
                                            <!--//app-card-body-->

                                        </div>
                                        <!--//app-card-->
                                    </div>
                                    <!--//col-->
                                    <!--//col-->
                                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                        <div class="app-card app-card-doc shadow-sm h-100">
                                            <div class="app-card-thumb-holder p-3">
                                                <span class="icon-holder">
                                                    <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="file-pdf" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <span class="badge bg-success">NEW</span>
                                                <a class="app-card-link-mask" href="#file-link"></a>
                                            </div>
                                            <div class="app-card-body p-3 has-card-actions">

                                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                <div class="app-doc-meta">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><span class="text-muted">Type:</span> Factuer</li>
                                                        <li><span class="text-muted">N :</span> F/234/423</li>
                                                        <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                    </ul>
                                                </div>
                                                <!--//app-doc-meta-->

                                                <div class="app-card-actions">
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--//dropdown-toggle-->
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                        </path>
                                                                    </svg>
                                                                View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                        </path>
                                                                    </svg>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                        </path>
                                                                    </svg>Download</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                        </path>
                                                                    </svg>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--//dropdown-->
                                                </div>
                                                <!--//app-card-actions-->

                                            </div>
                                            <!--//app-card-body-->

                                        </div>
                                        <!--//app-card-->
                                    </div>
                                    <!--//col-->
                                    <!--//col-->
                                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                        <div class="app-card app-card-doc shadow-sm h-100">
                                            <div class="app-card-thumb-holder p-3">
                                                <span class="icon-holder">
                                                    <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="file-pdf" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <span class="badge bg-success">NEW</span>
                                                <a class="app-card-link-mask" href="#file-link"></a>
                                            </div>
                                            <div class="app-card-body p-3 has-card-actions">

                                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                <div class="app-doc-meta">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><span class="text-muted">Type:</span> Factuer</li>
                                                        <li><span class="text-muted">N :</span> F/234/423</li>
                                                        <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                    </ul>
                                                </div>
                                                <!--//app-doc-meta-->

                                                <div class="app-card-actions">
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--//dropdown-toggle-->
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                        </path>
                                                                    </svg>
                                                                View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                        </path>
                                                                    </svg>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                        </path>
                                                                    </svg>Download</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                        </path>
                                                                    </svg>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--//dropdown-->
                                                </div>
                                                <!--//app-card-actions-->

                                            </div>
                                            <!--//app-card-body-->

                                        </div>
                                        <!--//app-card-->
                                    </div>
                                    <!--//col-->
                                    <!--//col-->
                                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                        <div class="app-card app-card-doc shadow-sm h-100">
                                            <div class="app-card-thumb-holder p-3">
                                                <span class="icon-holder">
                                                    <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="file-pdf" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <span class="badge bg-success">NEW</span>
                                                <a class="app-card-link-mask" href="#file-link"></a>
                                            </div>
                                            <div class="app-card-body p-3 has-card-actions">

                                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                <div class="app-doc-meta">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><span class="text-muted">Type:</span> Factuer</li>
                                                        <li><span class="text-muted">N :</span> F/234/423</li>
                                                        <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                    </ul>
                                                </div>
                                                <!--//app-doc-meta-->

                                                <div class="app-card-actions">
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--//dropdown-toggle-->
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                        </path>
                                                                    </svg>
                                                                View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                        </path>
                                                                    </svg>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                        </path>
                                                                    </svg>Download</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                        </path>
                                                                    </svg>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--//dropdown-->
                                                </div>
                                                <!--//app-card-actions-->

                                            </div>
                                            <!--//app-card-body-->

                                        </div>
                                        <!--//app-card-->
                                    </div>
                                    <!--//col-->
                                     <!--//col-->
                                     <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                        <div class="app-card app-card-doc shadow-sm h-100">
                                            <div class="app-card-thumb-holder p-3">
                                                <span class="icon-holder">
                                                    <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="file-pdf" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <span class="badge bg-success">NEW</span>
                                                <a class="app-card-link-mask" href="#file-link"></a>
                                            </div>
                                            <div class="app-card-body p-3 has-card-actions">

                                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                <div class="app-doc-meta">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><span class="text-muted">Type:</span> Factuer</li>
                                                        <li><span class="text-muted">N :</span> F/234/423</li>
                                                        <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                    </ul>
                                                </div>
                                                <!--//app-doc-meta-->

                                                <div class="app-card-actions">
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--//dropdown-toggle-->
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                        </path>
                                                                    </svg>
                                                                View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                        </path>
                                                                    </svg>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                        </path>
                                                                    </svg>Download</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                        </path>
                                                                    </svg>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--//dropdown-->
                                                </div>
                                                <!--//app-card-actions-->

                                            </div>
                                            <!--//app-card-body-->

                                        </div>
                                        <!--//app-card-->
                                    </div>
                                    <!--//col-->
                                    <!--//col-->
                                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                        <div class="app-card app-card-doc shadow-sm h-100">
                                            <div class="app-card-thumb-holder p-3">
                                                <span class="icon-holder">
                                                    <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="file-pdf" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <span class="badge bg-success">NEW</span>
                                                <a class="app-card-link-mask" href="#file-link"></a>
                                            </div>
                                            <div class="app-card-body p-3 has-card-actions">

                                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                <div class="app-doc-meta">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><span class="text-muted">Type:</span> Factuer</li>
                                                        <li><span class="text-muted">N :</span> F/234/423</li>
                                                        <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                    </ul>
                                                </div>
                                                <!--//app-doc-meta-->

                                                <div class="app-card-actions">
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--//dropdown-toggle-->
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                        </path>
                                                                    </svg>
                                                                View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                        </path>
                                                                    </svg>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                        </path>
                                                                    </svg>Download</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                        </path>
                                                                    </svg>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--//dropdown-->
                                                </div>
                                                <!--//app-card-actions-->

                                            </div>
                                            <!--//app-card-body-->

                                        </div>
                                        <!--//app-card-->
                                    </div>
                                    <!--//col-->
                                    <!--//col-->
                                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                        <div class="app-card app-card-doc shadow-sm h-100">
                                            <div class="app-card-thumb-holder p-3">
                                                <span class="icon-holder">
                                                    <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="file-pdf" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <span class="badge bg-success">NEW</span>
                                                <a class="app-card-link-mask" href="#file-link"></a>
                                            </div>
                                            <div class="app-card-body p-3 has-card-actions">

                                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                <div class="app-doc-meta">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><span class="text-muted">Type:</span> Factuer</li>
                                                        <li><span class="text-muted">N :</span> F/234/423</li>
                                                        <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                    </ul>
                                                </div>
                                                <!--//app-doc-meta-->

                                                <div class="app-card-actions">
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--//dropdown-toggle-->
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                        </path>
                                                                    </svg>
                                                                View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                        </path>
                                                                    </svg>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                        </path>
                                                                    </svg>Download</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                        </path>
                                                                    </svg>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--//dropdown-->
                                                </div>
                                                <!--//app-card-actions-->

                                            </div>
                                            <!--//app-card-body-->

                                        </div>
                                        <!--//app-card-->
                                    </div>
                                    <!--//col-->
                                    <!--//col-->
                                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                                        <div class="app-card app-card-doc shadow-sm h-100">
                                            <div class="app-card-thumb-holder p-3">
                                                <span class="icon-holder">
                                                    <svg class="svg-inline--fa fa-file-pdf pdf-file" aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="file-pdf" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M88 304H80V256H88C101.3 256 112 266.7 112 280C112 293.3 101.3 304 88 304zM192 256H200C208.8 256 216 263.2 216 272V336C216 344.8 208.8 352 200 352H192V256zM224 0V128C224 145.7 238.3 160 256 160H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64C0 28.65 28.65 0 64 0H224zM64 224C55.16 224 48 231.2 48 240V368C48 376.8 55.16 384 64 384C72.84 384 80 376.8 80 368V336H88C118.9 336 144 310.9 144 280C144 249.1 118.9 224 88 224H64zM160 368C160 376.8 167.2 384 176 384H200C226.5 384 248 362.5 248 336V272C248 245.5 226.5 224 200 224H176C167.2 224 160 231.2 160 240V368zM288 224C279.2 224 272 231.2 272 240V368C272 376.8 279.2 384 288 384C296.8 384 304 376.8 304 368V320H336C344.8 320 352 312.8 352 304C352 295.2 344.8 288 336 288H304V256H336C344.8 256 352 248.8 352 240C352 231.2 344.8 224 336 224H288zM256 0L384 128H256V0z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-file-pdf pdf-file"></i> Font Awesome fontawesome.com -->
                                                </span>
                                                <span class="badge bg-success">NEW</span>
                                                <a class="app-card-link-mask" href="#file-link"></a>
                                            </div>
                                            <div class="app-card-body p-3 has-card-actions">

                                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Nom Client</a></h4>
                                                <div class="app-doc-meta">
                                                    <ul class="list-unstyled mb-0">
                                                        <li><span class="text-muted">Type:</span> Factuer</li>
                                                        <li><span class="text-muted">N :</span> F/234/423</li>
                                                        <li><span class="text-muted">Creation:</span> 3 days ago</li>
                                                    </ul>
                                                </div>
                                                <!--//app-doc-meta-->

                                                <div class="app-card-actions">
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <!--//dropdown-toggle-->
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                                                        </path>
                                                                    </svg>
                                                                View</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                                                        </path>
                                                                    </svg>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-download me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                                        </path>
                                                                    </svg>Download</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><svg width="1em"
                                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2"
                                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                        </path>
                                                                        <path fill-rule="evenodd"
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                        </path>
                                                                    </svg>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--//dropdown-->
                                                </div>
                                                <!--//app-card-actions-->

                                            </div>
                                            <!--//app-card-body-->

                                        </div>
                                        <!--//app-card-->
                                    </div>
                                    <!--//col-->
                                </div>
                                <nav class="app-pagination ">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>



						    </div><!--//app-card-body-->
						</div><!--//app-card-->

                        {{-- {{ $orderPaye->onEachSide(7)->links() }} --}}



			        </div><!--//tab-pane-->

			        <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
					    <div class="app-card app-card-orders-table mb-3">
						    <div class="app-card-body">



						    </div><!--//app-card-body-->
						</div><!--//app-card-->

                        {{-- {{ $orderEnAttent->onEachSide(7)->links() }} --}}


			        </div><!--//tab-pane-->
			        <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
					    <div class="app-card app-card-orders-table ">
						    <div class="app-card-body">



						    </div><!--//app-card-body-->
						</div><!--//app-card-->

                        {{-- {{ $orderAnnule->onEachSide(7)->links() }} --}}


			        </div><!--//tab-pane-->

				</div><!--//tab-content-->



		    </div><!--//container-fluid-->
	    </div><!--//app-content-->


    </div><!--//app-wrapper-->

@endsection



















