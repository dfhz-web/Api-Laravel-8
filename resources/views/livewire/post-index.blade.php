<div>
  
    
    <div class="mt-7 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            {{-- <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image:url(@if($post->image){{Storage::url($post->image->url)}}@else https://cdn.pixabay.com/photo/2016/11/14/05/21/children-1822688__340.jpg @endif)"> --}}
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image:url(@if($post->image)https://cdn.pixabay.com/photo/2021/02/01/16/23/french-mastiff-5971220__340.jpg @endif)">

              <div class="w-full h-full px-8 flex flex-col justify-center">
                 
                 
                  <div>
                      @foreach ($post->tags as $tag)
                      <a href="{{route('posts.tag',$tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                       @endforeach
                 </div>
                 
                 
                 
                 
                  <h1 class="text-4xl text-white leading-8 font-bold mt-5">
                     <a href="{{route('posts.show',$post)}}">
                         {{$post->name}}
                     </a>
                 </h1>
                  


              </div>
              
              {{-- <img src="" alt=""> --}}
            </article>
        @endforeach

     </div>

     <div class="mt-4">
         {{$posts->links()}}
     </div>
</div>
