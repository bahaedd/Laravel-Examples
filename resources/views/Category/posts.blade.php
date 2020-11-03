<h1>Posts</h1>
@forelse ($posts as $post)
<li>{{ $post->title }}</li>
@empty
No posts
@endforelse
