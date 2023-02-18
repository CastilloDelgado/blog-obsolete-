<div class="flex justify-center py-10">
  <div>
    <div class="flex flex-row justify-center font-bold mb-6 border-b-2 border-black pb-6">
      <h1 class="text-center text-7xl">Life & live music</h1>
      <p class="font-sans font-light ml-1">(blog)</p>
    </div>

    <h2 class="text-center text-6xl font-light font-sans">
      Fotos <b class="font-bold">horribles</b> y <b class="font-bold ">buenas</b> historias de momentos <b
        class="font-bold">inolvidables.</b>
    </h2>

    <div class="mt-10">
      <p class="font-sans">Lee una reseña random de nuestro repertorio</p>
    </div>

    <div class="lg:columns-3 gap-2">
      @foreach ([
      [
      "dir" => "storage/images/header-1.jpeg",
      "bg" => "bg-red-100"
      ],
      [
      "dir" => "storage/images/header-2.jpeg",
      "bg" => "bg-red-200"
      ],
      [
      "dir" => "storage/images/header-3.jpeg",
      "bg" => "bg-red-300"
      ],

      ] as $image)
      <div class="mb-4">
        <img src={{asset($image["dir"])}} alt="" class="grayscale hover:filter-none">
        <div class={{ $image["bg"]}}>
          <div class="p-2">
            <div>
              <p class="font-sans font-xs">Artista:</p>
              <p class="font-bold text-2xl">Amyl and the sniffers</p>
            </div>
            <div class="flex flex-row">
              <p class="font-sans font-xs">Genero:</p>
              <p class="font-xs ml-2">Punk, Neopunk</p>
            </div>
            <div class="flex flex-row">
              <p class="font-sans font-xs">Fecha:</p>
              <p class="font-xs ml-2">Enero 12 del 2023</p>
            </div>
            <div class="flex flex-row">
              <p class="font-sans font-xs">Lugar:</p>
              <p class="font-xs ml-2">C3 Stage, Guadalajara, Mx.</p>
            </div>
            <div class="flex flex-row">
              <p class="font-sans font-xs">Autor:</p>
              <p class="font-xs ml-2">Marco Castillo</p>
            </div>
            <div class="flex flex-row">
              <p class="font-sans font-xs">Calificación:</p>
              <p class="font-xs ml-2">5/5</p>
            </div>
          </div>
          <p class="font-sans text-right mt-6 bg-black text-white p-2" style="font-size: 12px">Publicado hace 10 días
          </p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>