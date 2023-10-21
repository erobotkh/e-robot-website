@props(['post_id','post_cate_id','category','banner','title','description','like','comment'])
<style>
    .activity-card:hover .activity-content{
        top:45%;
    }
    .activity-card:hover .grayscreen{
        opacity: 0.75;
        transition: 0.5s;
    }
    .activity-card:hover .activity-description{
        opacity: 1;
        transition: 0.5s;
    }
</style>

<div class="activity-card lg:w-full md:w-full relative rounded {{$category}} sm:w-[50%]" id="{{$post_id}}" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;">
    <a href="{{route('detailContent',['id'=>$post_id,'category_id'=>$post_cate_id])}}">
        <div class="card rounded overflow-y-hidden relative">
            <div class="grayscreen w-full h-full bg-black opacity-50 absolute rounded" ></div>

            <div class="activity-banner w-full">
                <img style="height:80vh; width:100%; object-fit: cover; " class="rounded" src={{asset($banner)}} alt="">
            </div>
            <div class="activity-content absolute top-[70%] text-white  px-3" style="transition: 0.5s" >
                <div class="activity-title lg:text-2xl font-semibold py-2 md:text-xl sm:text-lg">{{$title}}</div>
                <article class="activity-description text-sm text-justify line-clamp-6 opacity-50"> {{$description}}</article>
            </div>
        </div>
    </a>
    <div class="activity-like-comment z-5 absolute bottom-0 p-3 text-sm  bg-black w-full rounded-b flex items-center justify-between">
        {{-- <button data-num1="1" class="like  px-2 py-1 border border-white flex items-center justify-between text-white bg-[#EB0100] flex rounded-md  hover:bg-white hover:text-[#EB0100] hover:border-solid hover:border-red-500 " >
            <i class='bx bxs-like text-md'></i>
            Like
        </button> --}}

        <p class="text-[#EB0100] font-semibold"> {{$like}} likes . {{$comment}} comments</p>

    </div>
</div>


<script>
    $(document).ready(function(){
            // let check = true;

        $('.like').click(function () {


            $(this).toggleClass('bg-green-500');


            // var ethis = $(this);
            // var ss = ethis.data("num1");
            // if(ss== 0){
            //     $(this).addClass('liked bg-indigo-500');
            //     ethis.data("num1", "1");
            // }
            // else{
            //     $(this).removeClass('liked bg-green-500');
            //     ethis.data("num1", "0");
            // }
            // if(check){
            //     $(this).addClass('liked bg-green-500');
            //     check = false
            // }else{
            //     $(this).removeClass('liked bg-green-500');
            //     check = true
            // }
            // console.log($(this).hasClass('liked'))
            // var $button = $(this);
        //     if (!$$button.hasClass('bg-green-500')) {
        //         // Remove the custom styles
        // // .removeClass('liked bg-green-500');
        //     $button.addClass('bg-green-500');
        //         // console.log($(this).hasClass('liked'))
        //     } else {
        //         $button.removeClass('bg-green-500');
        //         // Add the custom styles
        //         // $(this).addClass('liked bg-green-500');
        //         // $(this).removeClass('liked bg-green-500');
        //     }

            // Toggle the 'liked' class
            // $(this).toggleClass('liked');
        });
    })

</script>


