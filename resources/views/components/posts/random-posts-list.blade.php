<div>
  <div class="mt-8">
    <p class="font-sans text-lg">Lee un post random de nuestro blog</p>
  </div>

  <x-posts.post-small-list :posts='[
      [
        "dir" => "storage/images/header-1.jpeg",
        "bg" => "bg-fuchsia-100",
        "artist" => "Amyl and the sniffers",
        "genres" => ["Rock", "Punk", "Neopunk"],
        "concert_date" => "Enero 12 del 2023",
        "location" => "C3 Stage, Guadalajara, Mx.",
        "author" => "Marco Castillo",
        "grade" => "5"
      ],
      [
        "dir" => "storage/images/header-2.jpeg",
        "bg" => "bg-fuchsia-200",
        "artist" => "Amyl and the sniffers",
        "genres" => ["Rock", "Punk", "Neopunk"],
        "concert_date" => "Enero 12 del 2023",
        "location" => "C3 Stage, Guadalajara, Mx.",
        "author" => "Marco Castillo",
        "grade" => "5"
      ],
      [
        "dir" => "storage/images/header-3.jpeg",
        "bg" => "bg-fuchsia-300",
        "artist" => "Amyl and the sniffers",
        "genres" => ["Rock", "Punk", "Neopunk"],
        "concert_date" => "Enero 12 del 2023",
        "location" => "C3 Stage, Guadalajara, Mx.",
        "author" => "Marco Castillo",
        "grade" => "5"
      ],
    ]' />
</div>