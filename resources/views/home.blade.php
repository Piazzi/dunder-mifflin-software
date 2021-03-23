@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card illustration flex-fill">
                <div class="card-body p-0 d-flex flex-fill">
                    <div class="row no-gutters w-100">
                        <div class="col-6">
                            <div class="illustration-text p-3 m-1">
                                <h4 class="illustration-text">Bem vindo de volta {{Auth::user()->name}}!</h4>
                                <p class="mb-0">Dunder Mifflin Paper Company Software</p>
                            </div>
                        </div>
                        <div class="col-6 align-self-end text-right">
                            <img style="max-width: 80% !important" src="{{asset('css/images/customer-support.png')}}" alt="Customer Support" class="img-fluid illustration-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">R$ 24.300</h3>
                            <p class="mb-2">Lucro total do mês</p>
                            <div class="mb-0">
                                <span class="badge badge-soft-success mr-2"> <i class="mdi mdi-arrow-bottom-right"></i> +5.35% </span>
                                <span class="text-muted">Em relação ao último mês</span>
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-middle text-success">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">43</h3>
                            <p class="mb-2">Pedidos Pendentes</p>
                            <div class="mb-0">
                                <span class="badge badge-soft-danger mr-2"> <i class="mdi mdi-arrow-bottom-right"></i> -4.25% </span>
                                <span class="text-muted">Desde semana passada</span>
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag align-middle text-danger">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">R$ 1.700</h3>
                            <p class="mb-2">Lucro da Semana</p>
                            <div class="mb-0">
                                <span class="badge badge-soft-success mr-2"> <i class="mdi mdi-arrow-bottom-right"></i> +8.65% </span>
                                <span class="text-muted">Em relação a última semana</span>
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="stat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-middle text-info">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12 col-lg-6 col-xl-12 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <div class="card-actions float-right">
                        <div class="dropdown show">
                            <a href="#" data-toggle="dropdown" data-display="static">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Últimas atualizações</h5>
                </div>
                <div class="card-body">
                    <ul class="timeline">
                        <li class="timeline-item">
                            <strong>Motorista João irá entregar o pedido #4356 ao cliente Maurício</strong>
                            <span class="float-right text-muted text-sm">30m ago</span>
                            <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris...</p>
                        </li>
                        <li class="timeline-item">
                            <strong>Novos funcionários foram contratados</strong>
                            <span class="float-right text-muted text-sm">2h ago</span>
                            <p>Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum
                                nunc...</p>
                        </li>
                        <li class="timeline-item">
                            <strong>Novos produtos foram criados</strong>
                            <span class="float-right text-muted text-sm">3h ago</span>
                            <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada...</p>
                        </li>
                        <li class="timeline-item">
                            <strong>O armazém JF está quase sem estoque do produto Folha A4</strong>
                            <span class="float-right text-muted text-sm">30m ago</span>
                            <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum...</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection