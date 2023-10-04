@props(['post_id','post_cate_id','banner','title','ca'])

<div class="thumbnail h-[35vh] bg-white rounded hover:scale-[0.98] hover:transition-[0.5s] transition-[0.5s] mb-2 {{$ca}}" id="{{$post_id}}" style="box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;">
    <a href="{{route('detailContent',['id'=>$post_id,'category_id'=>$post_cate_id])}}">
        <div class="banner"><img class="  rounded-t-sm h-[20vh] w-[100%] object-cover" src="{{ asset($banner) }}" alt=""></div>
        <article class="title px-4 pt-3 text-sm line-clamp-3 text-justify font-semibold">{{$title}}</article>
    </a>
</div>


