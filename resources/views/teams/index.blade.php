<x-app-layout>
     <!-- gallery section start -->
   <div class="gallery_section layout_padding">
    <div class="container">
       <h1 class="gallery_taital">Showcase</h1>
      
       <p class="gallery_text">Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorema gna aliqua. Ut enim ad </p>
       @php
      $val= [];
      $team = $data['response'];
      for ($i=0; $i < count($team) ; $i++) { 
          $val[] = $team[$i]['team']['logo'];
      }
      
     
       @endphp
       <div class="section ">
          <div class="row ">
         @foreach ($val as $key => $item)
         <div class="col-3  "> <img src="{{ $item }}" alt=""> </div>
         @endforeach
         
      </div> 
      
      </div>
      
         
      
       
    </div>
 </div>
 <!-- gallery section end -->
</x-app-layout>