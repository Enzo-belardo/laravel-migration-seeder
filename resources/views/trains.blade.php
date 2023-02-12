@extends('layouts.app')

@section('main-content')
 

  <div class="container p-4">
       <div class="row">
           @foreach ($trains as $train)
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-text">
                              <span class="fw-bold">Azienda:</span>
                              <span>{{ $train->azienda }}</span>
                            </div>

                            <div class="card-text">
                              <span class="fw-bold">Stazione di partenza:</span>
                              <span>{{ $train->stazione_di_partenza }}</span>
                            </div>

                            <div class="card-text">
                              <span class="fw-bold">Stazione di arrivo:</span>
                              <span>{{ $train->stazione_di_arrivo }}</span>
                            </div>

                            <div class="card-text ">
                              <span class="fw-bold">Data e ora di partenza: </span>
                              <span>{{ $train->orario_di_partenza }}</span>
                            </div>

                            <div class="card-text ">
                              <span class="fw-bold">Data e ora di arrivo: </span>
                              <span>{{ $train->orario_di_arrivo }}</span>
                            </div>

                                
                            <div class="card-text ">
                              <span class="fw-bold">Codice treno: </span>
                              <span>{{ $train->codice_treno }}</span>
                            </div>
                        </div>
                   </div>
               </div>
           @endforeach    
       </div>
  </div>
@endsection