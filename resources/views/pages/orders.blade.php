@extends('layouts.app')

@section('content')
    @include('components.navbar')
    <!--//app-header-->



    <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
                <h1 class="app-page-title">Overview</h1>
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Orders</h1>
				    </div>

				    <div class="col-auto">
					     <div class="page-utilities">
                             <form class="">
						        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                    <div class="col-auto">
                                        <form class="table-search-form row gx-1 align-items-center">
                                            <div class="col-auto">
                                                <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Recherche Client">
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


			    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4 border border-dashed rounded-5 px-3  shadow-sm">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Toute</a>
				    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Payé</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">En attente</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Annulé</a>
				</nav>


				<div class="tab-content border border-dashed rounded-5  shadow-sm overflow-hidden" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table  mb-3">
						    <div class="app-card-body">
							    <div class="table-responsive ms-2">
							        <table class="table app-table-hover mb-0 text-left ">
										<thead>
											<tr>
												<th class="cell ps-4">Order</th>
												<th class="cell">Description</th>
												<th class="cell">Cliente</th>
												<th class="cell">Date</th>
												<th class="cell">Status</th>
												<th class="cell">Total</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
                                            @foreach ($order as $element )
											<tr>
												<td class="cell">#{{$element->id}}</td>
												<td class="cell"><span class="truncate">{{$element->description}}</span></td>
												<td class="cell">{{$element->client}}</td>
												<td class="cell"><span>{{$element->created_at->day}} {{$element->created_at->monthName}} </span><span class="note">{{$element->created_at->hour}}:{{$element->created_at->minute}} PM</span></td>
												<td class="cell">
                                                    <span class="badge
                                                        @if ($element->status=='Paye')
                                                                bg-success
                                                        @elseif ($element->status=='EnAttente')
                                                                bg-warning
                                                        @else
                                                                bg-danger
                                                        @endif
                                                        ">{{$element->status}}
                                                    </span>
                                                </td>
												<td class="cell">{{$element->total}} Dh</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">Prouver</a></td>
											</tr>
                                            @endforeach


										</tbody>
									</table>
						        </div><!--//table-responsive-->

						    </div><!--//app-card-body-->
						</div><!--//app-card-->
                       
                       
                        {{ $order->onEachSide(7)->links() }}<!--//app-pagination-->
                      


			        </div><!--//tab-pane-->

			        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
					    <div class="app-card app-card-orders-table mb-3">
						    <div class="app-card-body">
							    <div class="table-responsive">

							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th class="cell ps-4">Order</th>
												<th class="cell">Description</th>
												<th class="cell">Cliente</th>
												<th class="cell">Date</th>
												<th class="cell">Status</th>
												<th class="cell">Total</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
                                            @foreach ($orderPaye as $element )
											<tr>
												<td class="cell">#{{$element->id}}</td>
												<td class="cell"><span class="truncate">{{$element->description}}</span></td>
												<td class="cell">{{$element->client}}</td>
												<td class="cell"><span>{{$element->created_at->day}} {{$element->created_at->monthName}} </span><span class="note">{{$element->created_at->hour}}:{{$element->created_at->minute}} PM</span></td>
												<td class="cell">
                                                    <span class="badge bg-success ">{{$element->status}}
                                                    </span>
                                                </td>
												<td class="cell">{{$element->Total}}0 Dh</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->
						</div><!--//app-card-->
                  
                        {{ $orderPaye->onEachSide(7)->links() }}

                      

			        </div><!--//tab-pane-->

			        <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
					    <div class="app-card app-card-orders-table mb-3">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th class="cell ps-4">Order</th>
												<th class="cell">Description</th>
												<th class="cell">Cliente</th>
												<th class="cell">Date</th>
												<th class="cell">Status</th>
												<th class="cell">Total</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
                                            @foreach ($orderEnAttent as $element )
											<tr>
												<td class="cell">#{{$element->id}}</td>
												<td class="cell"><span class="truncate">{{$element->description}}</span></td>
												<td class="cell">{{$element->client}}</td>
												<td class="cell"><span>{{$element->created_at->day}} {{$element->created_at->monthName}} </span><span class="note">{{$element->created_at->hour}}:{{$element->created_at->minute}} PM</span></td>
												<td class="cell">
                                                    <span class="badge bg-warning ">{{$element->status}}
                                                    </span>
                                                </td>
												<td class="cell">{{$element->Total}}0 Dh</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
                                            @endforeach

										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->
						</div><!--//app-card-->
                        
                        {{ $orderEnAttent->onEachSide(7)->links() }}
                       

			        </div><!--//tab-pane-->
			        <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
					    <div class="app-card app-card-orders-table mb-3">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th class="cell ps-4">Order</th>
												<th class="cell">Description</th>
												<th class="cell">Cliente</th>
												<th class="cell">Date</th>
												<th class="cell">Status</th>
												<th class="cell">Total</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
                                            @foreach ($orderAnnule as $element )
											<tr>
												<td class="cell">#{{$element->id}}</td>
												<td class="cell"><span class="truncate">{{$element->description}}</span></td>
												<td class="cell">{{$element->client}}</td>
												<td class="cell"><span>{{$element->created_at->day}} {{$element->created_at->monthName}} </span><span class="note">{{$element->created_at->hour}}:{{$element->created_at->minute}} PM</span></td>
												<td class="cell">
                                                    <span class="badge bg-danger ">{{$element->status}}
                                                    </span>
                                                </td>
												<td class="cell">{{$element->Total}}0 Dh</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->
						</div><!--//app-card-->
                        
                        {{ $orderAnnule->onEachSide(7)->links() }}
                        

			        </div><!--//tab-pane-->
				</div><!--//tab-content-->



		    </div><!--//container-fluid-->
	    </div><!--//app-content-->


    </div><!--//app-wrapper-->

@endsection
