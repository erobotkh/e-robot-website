<x-layout>
    <div class="p-10">
        <x-about-title title="Departments of E-robot"/>
        <div class="w-full grid gap-[30px] md:grid-cols-2 sm:grid-cols-1   ">
            <x-department-card department="Innovation" image="images/inovation_cover.webp" description="We drive creativity and change by exploring new ideas, technologies, and approaches. We aim to continuously improve and transform our organization through inventive solutions that enhance our products, processes, and services."/>
            <x-department-card department="Social Engagement" image="images/social_engagement_cover.png" description="We build meaningful connections with our community and stakeholders. We strive to foster positive relationships, drive social impact, and amplify our organization's presence through purposeful engagement, communication, and outreach."/>
            <x-department-card department="Finance" image="images/finance.jpg" description="We ensure financial stability, transparency, and strategic resource allocation, driving our organization's growth and success while safeguarding its fiscal health."/>
            <x-department-card department="Planning & Strategy" image="images/plannig_strategy_cover.jpg" description="We collaborate cohesively, relentlessly pursue excellence in our collective efforts to achieve our shared goals. Together, we aim to exceed expectations, solve challenges, and drive success while fostering a supportive and inclusive team environment."/>
            <x-department-card department="HR & Admin" image="images/hr_admin_cover.jpg" description="We foster a supportive, inclusive, and efficient work environment. We aim to attract, develop, and retain top talent, while also providing seamless administrative support to enable our organization to thrive."/>
        </div>

        <x-about-title title="Teams of E-robot"/>
        {{-- <div class="w-100  grid gap-[20px]  sm:grid-cols-2 lg:grid-cols-3 my-10">
            <x-team-card department="Robotics" teamLeader="Hak Kimhong" leaderProfile="./images/photo_members/Hak_Kimhong.jpg" teamMember="20" image="./images/robotics_cover.jpg" description="We design, develop, and deploy cutting-edge robotic solutions that solve complex problems, streamline processes, and enhance productivity. We are dedicated to pushing the boundaries of automation and innovation to benefit our organization and society."/>
            <x-team-card department="DevOp" teamLeader="Korn Sophea" leaderProfile="./images/photo_members/Korn_Sophea.jpg" teamMember="20" image="./images/DevOp_cover.jpg" description="We bridge the gap between development and operations, enabling seamless collaboration and continuous improvement. We aim to automate processes, accelerate software delivery, and enhance reliability to ensure our products and services meet."/>
            <x-team-card department="Social Media" teamLeader="Rann Sreynith" leaderProfile="./images/photo_members/Rann_Sreynith.JPG" teamMember="20" image="./images/Social_media_cover.avif" description="We cultivate an engaging online presence that reflects our E-robot's values, connects with our audience, and drives meaningful for everyone. We aim to share compelling content, spark conversations, and create a positive and lasting impact on our community."/>
            <x-team-card department="Finance & Account" teamLeader="Ung sreymuch" leaderProfile="./images/photo_members/Ung_Sreymuch.jpg" teamMember="20" image="./images/finance_account_cover.webp" description="We uphold financial integrity, provide accurate and timely reporting, and optimize resource allocation. We are committed to supporting our organization's financial health and growth through prudent financial management and strategic financial planning."/>
            <x-team-card department="Planning & Strategy" teamLeader="Pan Sovann" leaderProfile="./images/photo_members/Pan_Sovann.jpg" teamMember="20" image="./images/planning_strategy_cover.png" description="We chart the course for our organization's success. We work collaboratively to develop clear goals, informed decisions, and actionable plans that drive innovation, growth, and resilience in a rapidly evolving landscape."/>
            <x-team-card department="HR & Admin" teamLeader="Tro Bory" leaderProfile="./images/photo_members/Tro_Bory.jpg" teamMember="20" image="./images/hr_admin_cover.webp" description="We nurture a thriving and harmonious work environment. We focus on attracting, developing, and supporting our talented team members while ensuring seamless administrative operations. Our goal is to empower our organization to achieve its objectives with a strong and engaged workforce."/>

        </div> --}}
        <div class="w-100  grid gap-[20px]  sm:grid-cols-2 lg:grid-cols-3 my-10">
            @foreach ($team as $item)
                <?php $item->profile = env('DO_URL').$item->profile?>
                <?php $item->cover = env('DO_URL').$item->cover?>

                <x-team-card department="{{$item->name}}" teamLeader="{{$item->first_name}} {{$item->last_name}}" leaderProfile="{{$item->profile}}" teamMember="20" image="{{$item->cover}}" description="{{$item->bio}}"/>

            @endforeach
        </div>
        {{-- <x-about-title title="Subteams of E-robot"/>
        <div class="w-100 grid gap-[20px]  sm:grid-cols-2 lg:grid-cols-3 my-10">
            <x-team-card department="Website Development" teamLeader="Meth Farrizart" leaderProfile="./images/photo_members/Meth_Farrizart.jpg" teamMember="20" image="./images/website_cover.jpg" description="We create exceptional online experiences. We are dedicated to crafting user-friendly, visually appealing, and technically robust websites that effectively convey our message, engage our audience, and drive our digital success."/>
            <x-team-card department="Mobile Development" teamLeader="Korn Sophea" leaderProfile="./images/photo_members/Korn_Sophea.jpg" teamMember="20" image="./images/mobile-app-development_cover.jpg" description="We craft innovative and user-centric mobile applications. We are committed to delivering seamless, high-quality, and feature-rich mobile solutions that enhance user experiences and empower our organization's mobile presence."/>
            <x-team-card department="UX/UI Design" teamLeader="Mak Channa" leaderProfile="./images/photo_members/Mak_Channa.jpg" teamMember="20" image="./images/ux_ui_cover.jpg" description="We elevate user experiences through thoughtful design. We strive to create intuitive and visually captivating interfaces that delight users, foster engagement, and align with our organization's goals, ultimately enhancing the overall user journey."/>
        </div> --}}
    </div>
</x-layout>
