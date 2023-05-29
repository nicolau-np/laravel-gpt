 @extends('layouts.app')
 @section('content')
     <div class="row mt-4">
         <div class="col-md-12">
             @if (session('response'))
                 @php
                     echo session('response');
                 @endphp
             @endif
         </div>
     </div>

     <div class="row mt-4">
         <form method="post" action="/store">
             @csrf
             <div class="col-md-9">
                 <input type="text" class="form-control" name="ask" placeholder="Escreve a sua mensagem" />
             </div>
             <div class="col-md-3">
                 <button type="submit" class="btn btn-primary">Enviar</button>
             </div>
         </form>
     </div>
 @endsection
