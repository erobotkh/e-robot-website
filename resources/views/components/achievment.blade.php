@props(['num_social','num_province','num_project','num_student','num_member','num_intership'])

<div class="content contentBg1">
    <div class="socailImpact contentContainer">
        <div class="num">{{$num_social}}</div>
        <div class="subtitle">Socail Impact</div>
    </div>
    <div class="province contentContainer">
        <div class="num">{{$num_province}}</div>
        <div class="subtitle">Provinces</div>
    </div>
    <div class="province contentContainer">
        <div class="num">{{$num_project}}</div>
        <div class="subtitle">Projects</div>
    </div>
    <div class="achievmentTitle"  style="font-family: 'Battambang', cursive;">
        Achievments
    </div>
    <div class="student contentContainer">
        <div class="num">{{$num_student}}</div>
        <div class="subtitle">Students</div>
    </div>
    <div class="member contentContainer">
        <div class="num">{{$num_member}}</div>
        <div class="subtitle">Members</div>
    </div>
    <div class="province contentContainer">
        <div class="num">{{$num_intership}}</div>
        <div class="subtitle">Interships</div>
    </div>
</div>
