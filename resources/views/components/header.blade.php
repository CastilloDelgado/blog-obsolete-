<div class="flex justify-center py-6">
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
      <p class="font-sans text-lg">Lee una reseña random de nuestro repertorio</p>
    </div>

    <x-posts.post-small-list :posts='[
      [
        "dir" => "storage/images/header-1.jpeg",
        "bg" => "bg-red-100",
        "artist" => "Amyl and the sniffers",
        "genres" => ["Rock", "Punk", "Neopunk"],
        "concert_date" => "Enero 12 del 2023",
        "location" => "C3 Stage, Guadalajara, Mx.",
        "author" => "Marco Castillo",
        "grade" => "5"
      ],
      [
        "dir" => "storage/images/header-2.jpeg",
        "bg" => "bg-red-200",
        "artist" => "Amyl and the sniffers",
        "genres" => ["Rock", "Punk", "Neopunk"],
        "concert_date" => "Enero 12 del 2023",
        "location" => "C3 Stage, Guadalajara, Mx.",
        "author" => "Marco Castillo",
        "grade" => "5"
      ],
      [
        "dir" => "storage/images/header-3.jpeg",
        "bg" => "bg-red-300",
        "artist" => "Amyl and the sniffers",
        "genres" => ["Rock", "Punk", "Neopunk"],
        "concert_date" => "Enero 12 del 2023",
        "location" => "C3 Stage, Guadalajara, Mx.",
        "author" => "Marco Castillo",
        "grade" => "5"
      ],
    ]' />
  </div>
</div>