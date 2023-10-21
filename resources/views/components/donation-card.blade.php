@props(['acc_type','qr_code','acc_num','recipient_name','recipient_position','currency_symbol'])
<div class="{{$acc_type}} grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 rounded-lg hover:scale-[1.05] hover:transition-[3s] transition-[3s] relative bg-white items-center" style="box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;">
    <div class="qrCode p-3 pr-0 w-auto  "><img class="rounded-lg w-[100%]" src="{{$qr_code}}" alt=""></div>
    <div class="">
        <div class="finanaceDetail font-semibold text-[#0d3d54] pt-3 sm:pl-3 gap-2 ">
            <div class=" flex items-center justify-end absolute top-1 right-2 text-[13px] border rounded ">
                @if ($acc_type=='reil')
                    <button class="dollar_btn  px-3 cursor-pointer rounded">$</button>
                    <button class=" {{$acc_type}}_btn text-white  font-bold px-3 cursor-pointer bg-red-500 rounded">{{$currency_symbol}}</button>
                @else
                    <button class="{{$acc_type}}_btn  text-white font-bold px-3 cursor-pointer bg-red-500 rounded">{{$currency_symbol}}</button>
                    <button class="reil_btn   px-3 cursor-pointer rounded">៛</button>
                @endif


            </div>
            <div class=" px-2">
                <h1 class="text-center  font-bold text-[20px] pb-3 pt-3 recipient">Recipient Informations</h1>
                <div class="account_number text-[15px] ">Account type: <span class=" pl-2 text-[16px] font-bold uppercase"> {{$acc_type}}( {{$currency_symbol}} ) </span></div>
                <div class="account_number text-[15px]">Account number:<span class=" pl-2 text-[16px] font-bold"> {{$acc_num}} </span></div>
                <div class="account_name text-[15px]">Recipient name:<span class=" pl-2 text-[16px] font-bold uppercase"> {{$recipient_name}} </span></div>
                <div class="position text-[15px]">Position: <span class=" pl-2 text-[16px] font-bold uppercase">{{$recipient_position}}</span></div>
            </div>

        </div>
        <div class="thanks h-[130px] flex items-center justify-evenly">
            <span class="text-red-600 font-semibold text-2xl">Thank You!</span>
            <span class="h-full"><img class="h-full" src="/images/photo_members/sticker-e-robot.png" alt=""></span>
        </div>
    </div>
</div>
