@props(['post'])
<div class="mb-4">
  <img src={{asset($post["dir"])}} alt="" class="grayscale hover:filter-none">
  <div class={{ $post["bg"]}}>
    <div class="p-2">
      <div>
        <p class="font-sans font-xs">Artista:</p>
        <p class="font-bold text-2xl">{{ $post["artist"] }}</p>
      </div>
      <div class="flex flex-row">
        <p class="font-sans font-xs">Genero:</p>
        <p class="font-xs ml-2">{{ implode(", ",$post["genres"]) }}</p>
      </div>
      <div class="flex flex-row">
        <p class="font-sans font-xs">Fecha:</p>
        <p class="font-xs ml-2"> {{ $post["concert_date"] }} </p>
      </div>
      <div class="flex flex-row">
        <p class="font-sans font-xs">Lugar:</p>
        <p class="font-xs ml-2">{{ $post["location"] }} </p>
      </div>
      <div class="flex flex-row">
        <p class="font-sans font-xs">Autor:</p>
        <p class="font-xs ml-2">{{ $post["author"] }} </p>
      </div>
      <div class="flex flex-row">
        <p class="font-sans font-xs">Calificación:</p>
        <p class="font-xs ml-2">{{ $post["grade"] }}/5</p>
      </div>
    </div>
    <p class="font-sans text-right mt-6 bg-black text-white p-2" style="font-size: 12px">Publicado hace 10 días
    </p>
  </div>
</div>