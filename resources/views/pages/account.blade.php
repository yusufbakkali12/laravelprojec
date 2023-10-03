
 @extends('layouts.app')

 @section('content')

 @include('components.navbar')
 <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">

			    <h1 class="app-page-title">My Account</h1>
                <div class="row gy-4">
	                <div class="col-12 col-lg-6">
		                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
								        <div class="app-icon-holder">
										    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                            </svg>
									    </div><!--//icon-holder-->

							        </div><!--//col-->
							        <div class="col-auto">
								        <h4 class="app-card-title">Profil</h4>
							        </div><!--//col-->
						        </div><!--//row-->
						    </div><!--//app-card-header-->
						    <div class="app-card-body px-4 w-100">
							    <div class="item border-bottom pb-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label mb-2"><strong>Logo</strong></div>
										    <div class="item-data"><img class="profile-image" src="assets/images/app-log.png" alt=""></div>
									    </div><!--//col-->
									    <div class="col text-end">
										    <button class="btn-sm app-btn-secondary" href="#" data-bs-toggle="modal" data-bs-target="#profile-image">Change</button>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Name</strong></div>
									        <div class="item-data">{{ Auth::user()->name }}</div>
                                            @error('name')
                                                    <small class="text-danger " >
                                                        <strong>{{ $message }}</strong>
                                                    </small>
                                            @enderror
									    </div><!--//col-->
									    <div class="col text-end">

										    <button class="btn-sm app-btn-secondary"  data-bs-toggle="modal" data-bs-target="#Name">Change</button>
                                            {{-- model to update  --}}
                                            <div class="modal fade" id="Name" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content app-card-body app-card p-3">
                                                        <div class="d-flex align-items-center justify-content-between ">
                                                           <h2 class="m-0 ps-2 ">Change Name</h2>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="{{ route("account.update",Auth::user()->id) }}" method="POST" class="col-12 ">
                                                            @csrf
                                                            @method('put')
                                                            <div class="app-card app-card-account d-flex flex-column align-items-start">
                                                                <div class="app-card-body px-4 w-100">
                                                                    <div class="item py-1">
                                                                        <div class="row justify-content-between align-items-center">
                                                                            <div class="col-12">
                                                                                <div class="item-label text-start my-1">New Name :</div>
                                                                                <div class="item-data">
                                                                                    <input type="text" name="name" class='form-control @error('name') is-invalid @enderror'></div>

                                                                            </div><!--//col-->
                                                                        </div><!--//row-->
                                                                    </div><!--//item-->
                                                                </div><!--//app-card-body-->
                                                            </div><!--//app-card-->
                                                            <div class="mt-3 pe-4 d-flex justify-content-end">
                                                                <button type="button" class="btn app-btn-primary me-3 rounded-5" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-info text-light col-4 rounded-5">Save Change</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- model --}}

									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Email</strong></div>
									        <div class="item-data">{{ Auth::user()->email }}</div>
									    </div><!--//col-->
									    <div class="col text-end">
                                            <button class="btn-sm app-btn-secondary" href="#" data-bs-toggle="modal" data-bs-target="#Email">Change</button>
										    {{-- <a class="btn-sm app-btn-secondary" href="#">Change</a> --}}
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
                                <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Address</strong></div>
									        <div class="item-data">ARDE BOUGRINE BOUDAROUA CR BNI KOLLA CAIDAT SIDI REDOUANE</div>
									    </div><!--//col-->
									    <div class="col text-end">
                                            <button class="btn-sm app-btn-secondary" href="#" data-bs-toggle="modal" data-bs-target="#Address">Change</button>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
                                <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Telephone N°:</strong></div>
									        <div class="item-data">0671104716</div>
									    </div><!--//col-->
									    <div class="col text-end">
										    <button class="btn-sm app-btn-secondary" href="#" data-bs-toggle="modal" data-bs-target="#Telephone">Change</button>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Password</strong></div>
									        <div class="item-data">
										        ************
									        </div>
									    </div><!--//col-->
									    <div class="col text-end">
										    <button class="btn-sm app-btn-secondary" href="#" data-bs-toggle="modal" data-bs-target="#Password">Change</button>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->

						    </div><!--//app-card-body-->
						    {{-- <div class="app-card-footer p-4 mt-auto">
							   <a class="btn app-btn-secondary" href="#">Manage Profile</a>
						    </div><!--//app-card-footer--> --}}

						</div><!--//app-card-->
	                </div><!--//col-->
	                <div class="col-12 col-lg-6">
		                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
								        <div class="app-icon-holder">
										    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-sliders" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                                            </svg>
									    </div><!--//icon-holder-->

							        </div><!--//col-->
							        <div class="col-auto">
								        <h4 class="app-card-title">Préférences</h4>
							        </div><!--//col-->
						        </div><!--//row-->
						    </div><!--//app-card-header-->
						    <div class="app-card-body px-4 w-100">

							    <div class="item border-bottom pb-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>ICE N°:</strong></div>
									        <div class="item-data">001649143000019</div>
									    </div><!--//col-->
									    <div class="col text-end">
										    <a class="btn-sm app-btn-secondary" href="#">Change</a>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Compte N°:</strong></div>
									        <div class="item-data">181 341 21211 9414372 001 0 29 BP Ouazzane</div>
									    </div><!--//col-->
									    <div class="col text-end">
										    <a class="btn-sm app-btn-secondary" href="#">Change</a>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
                                <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Patente N°:</strong></div>
									        <div class="item-data">22177789</div>
									    </div><!--//col-->
									    <div class="col text-end">
										    <a class="btn-sm app-btn-secondary" href="#">Change</a>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>CNSS N°:</strong></div>
									        <div class="item-data">8694904</div>
									    </div><!--//col-->
									    <div class="col text-end">
										    <a class="btn-sm app-btn-secondary" href="#">Change</a>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
                                <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>R.C N° :</strong></div>
									        <div class="item-data">441</div>
									    </div><!--//col-->
									    <div class="col text-end">
										    <a class="btn-sm app-btn-secondary" href="#">Change</a>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>I.F N°:</strong></div>
									        <div class="item-data">32610045</div>
									    </div><!--//col-->
									    <div class="col text-end">
										    <a class="btn-sm app-btn-secondary" href="#">Change</a>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Agrément N°:</strong></div>
									        <div class="item-data">2685</div>
									    </div><!--//col-->
									    <div class="col text-end">
										    <a class="btn-sm app-btn-secondary" href="#">Change</a>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
						    </div><!--//app-card-body-->
						    <div class="app-card-footer p-4 mt-auto">
							   <a class="btn app-btn-secondary" href="#">Manage Preferences</a>
						    </div><!--//app-card-footer-->

						</div><!--//app-card-->
	                </div><!--//col-->

                </div><!--//row-->

		    </div><!--//container-fluid-->
	    </div><!--//app-content-->



    </div><!--//app-wrapper-->



@endsection
