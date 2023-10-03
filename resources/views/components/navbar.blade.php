

{{-- model --}}

<div class="modal fade " id="ajouteClient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content app-card-body app-card p-3">
        <div class="d-flex align-items-center justify-content-between ">
           <h2 class="m-0 ps-2 ">Ajoute Nouveau Client</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
                <form action="{{ route("orders.store") }}" method="POST" class="col-12 ">
                    @csrf
                    <div class="app-card app-card-account d-flex flex-column align-items-start">
                        <div class="app-card-body px-4 w-100">
                            <div class="item py-1">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12">
                                        <div class="item-label"><strong>Cliente<span class="text-danger">*</span></strong></div>
                                        <div class="item-data"><input type="text" name="client" class=' form-control'></div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->
                            <div class="item py-1">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12">
                                        <div class="item-label"><strong>Description</strong></div>
                                        <textarea name="description" class="form-control form-control-lg" rows="4" ></textarea>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->
                            <div class="item py-1">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12">
                                        <div class="item-label"><strong>Telephone</strong></div>
                                        <div class="item-data">
                                            <input name="telephone" type="text" class=' form-control'>
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->
                            <div class="item py-1">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12">
                                        <div class="item-label"><strong>date</strong></div>
                                        <div class="item-data">
                                            <input name="date" type="date" class=' form-control'>
                                        </div>
                                    </div><!--//col-->

                                </div><!--//row-->
                            </div><!--//item-->
                            <div class="item py-1">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12">
                                        <div class="item-label"><strong>status</strong></div>
                                        <div class="item-data">
                                            <select name="status" class="form-select" id="">
                                                <option value="">choise status</option>
                                                <option value="Paye">Paye</option>
                                                <option value="EnAttente">en attente</option>
                                                <option value="Annule">Annule</option>
                                            </select>
                                        </div>
                                    </div><!--//col-->

                                </div><!--//row-->
                            </div><!--//item-->
                        </div><!--//app-card-body-->


                    </div><!--//app-card-->

                    <div class="mt-3 pe-4 d-flex justify-content-end">
                        <button type="button" class="btn app-btn-primary me-3 rounded-5" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info text-light col-4 rounded-5"> Ajoute </button>
                    </div>
                    <script>



                    </script>
                </form>
        </div>
    </div>
</div>
{{-- model --}}



<!-- Modal -->
    <div class="modal fade" id="AjouteDesignation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <form action="{{ route("listproduct.store") }}" method="POST" class="">
                @csrf
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajoute Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="listproduct" class="col-sm-4 col-form-label">Designation</label>
                        <div class="col-sm-8">
                            <input id="listproduct" type="text" class="form-control @error('designation') is-invalid @enderror"
                            name="listproduct" value="{{ old('designation') }}" placeholder="Designation">
                            @error('designation'){{ $message }}@enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label  class="col-sm-4 col-form-label">Reference</label>
                        <div class="col-sm-8">
                            <input id="Reference" type="text" class="form-control @error('Reference') is-invalid @enderror"
                            name="Reference" value="{{ old('Reference') }}" placeholder="Reference">
                            @error('Reference'){{ $message }}@enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label  class="col-sm-4 col-form-label">Prix</label>
                        <div class="col-sm-8">
                            <input id="Prix" type="text" class="form-control @error('Prix') is-invalid @enderror"
                            name="Prix" value="{{ old('Prix') }}" placeholder="Prix">
                            @error('Prix'){{ $message }}@enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label  class="col-sm-4 col-form-label">Quantité</label>
                        <div class="col-sm-8">
                            <input id="QTE" type="text" class="form-control @error('QTE') is-invalid @enderror"
                            name="QTE" value="{{ old('QTE') }}" placeholder="Quantité">
                            @error('QTE'){{ $message }}@enderror
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ajoute</button>
                </div>
            </form>
        </div>
        </div>
    </div>
<!-- Modal -->



<header class="app-header fixed-top">
    <div class="app-header-inner">
        <div class="container-fluid py-2">
            <div class="app-header-content">
                <div class="row justify-content-between align-items-center">

                    <div class="col-auto">
                        <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" role="img">
                                <title>Menu</title>
                                <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                            </svg>
                        </a>
                    </div>
                    <!--//col-->
                    {{-- <div class="search-mobile-trigger d-sm-none col">
                        <i class="search-mobile-trigger-icon fas fa-search"></i>
                    </div>
                    <!--//col-->
                    <div class="app-search-box col">
                        <form class="app-search-form">
                            <input type="text" placeholder="Search..." name="search"
                                class="form-control search-input">
                            <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </div> --}}
                    <!--//app-search-box-->
                <!--//app-utility-item-->

                    <div class="app-utilities col-auto">
                        <!--//app-utility-item-->
                        <button type="button" class="app-utility-item btn btn-info px-3 py-1 rounded rounded-5"
                        data-bs-toggle="modal" data-bs-target="#ajouteClient"
                        title="ajoute client">

                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="1.7em" height="1.7em" fill="currentColor" class="bi bi-person-plus-fill text-light" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                  </svg>


                        </button>

                        <!--//app-utility-item-->

                        <div class="app-utility-item app-notifications-dropdown dropdown">
                            <a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle"
                                data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"
                                title="Notifications">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
                                    <path fill-rule="evenodd"
                                        d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                </svg>

                                @if (1)
                                    <span class="icon-badge">1</span>
                                @endif


                            </a>
                            <!--//dropdown-toggle-->

                            <div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
                                <div class="dropdown-menu-header p-3">
                                    <h5 class="dropdown-menu-title mb-0">Notifications</h5>
                                </div>
                                <!--//dropdown-menu-title-->
                                <div class="dropdown-menu-content">
                                    <!--//item-->
                                    <div class="item p-3">
                                        <div class="row gx-2 justify-content-between align-items-center ">
                                            <div class="col-auto ">
                                                <div class="app-icon-holder">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                        class="bi bi-receipt" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                        <path fill-rule="evenodd"
                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!--//col-->
                                            <div class="col">
                                                <div class="info">
                                                    <div class="desc">You have a new invoice. Proin venenatis
                                                        interdum est.</div>
                                                    <div class="meta"> 1 day ago</div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="link-mask" href="notifications.html"></a>
                                    </div>
                                    <!--//item-->
                                    <div class="item p-3">
                                        <div class="row gx-2 justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <div class="app-icon-holder icon-holder-mono">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                        class="bi bi-bar-chart-line" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!--//col-->
                                            <div class="col">
                                                <div class="info">
                                                    <div class="desc">Stock Prod</div>
                                                    <div class="meta"> 3 days ago</div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="link-mask" href="notifications.html"></a>
                                    </div>
                                    <!--//item-->

                                    <!--//item-->
                                </div>
                                <!--//dropdown-menu-content-->

                                <div class="dropdown-menu-footer p-2 text-center">
                                    <a href="notifications.html">View all</a>
                                </div>

                            </div>
                            <!--//dropdown-menu-->
                        </div>


                        <!--//app-utility-item-->
                        <div class="app-utility-item">
                            <a href="settings.html" title="Settings">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear icon"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
                                    <path fill-rule="evenodd"
                                        d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
                                </svg>

                            </a>
                        </div>
                        <!--//app-utility-item-->

                        <div class="app-utility-item app-user-dropdown dropdown">
                            <a class="dropdown-toggle me-2" id="user-dropdown-toggle" data-bs-toggle="dropdown"
                                href="#" role="button" aria-expanded="false"> {{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                <li><a class="dropdown-item" href={{ route('account.index') }}>Account</a></li>
                                <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Log Out') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </ul>
                        </div>
                        <!--//app-user-dropdown-->
                    </div>
                    <!--//app-utilities-->
                </div>
                <!--//row-->
            </div>
            <!--//app-header-content-->
        </div>
        <!--//container-fluid-->
    </div>




    <!--//app-header-inner-->
    @include('components.sidebar')
    <!--//app-sidepanel-->




</header>

