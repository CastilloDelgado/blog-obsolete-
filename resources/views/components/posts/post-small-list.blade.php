@props(['posts'])
<div class="lg:columns-3 gap-2">
  @foreach ( $posts as $post)
  <x-posts.post-item :post='$post'></x-posts.post-item>
  @endforeach
</div>