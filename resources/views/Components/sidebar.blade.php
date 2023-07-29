<!DOCTYPE html>
<html lang="en">
@extends('Components.general')

<body>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('dashboard/') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('post/') }}">
                    <i class="bi bi-file-post"></i>
                    <span>Post Content</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('category/') }}">
                    <i class="bi bi-bookmarks"></i>
                    <span>Category</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('user/') }}">
                    <i class="bi bi-people-fill"></i>
                    <span>User</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('report/') }}">
                    <i class="bi bi-flag-fill"></i>
                    <span>Report</span>
                </a>
            </li>


            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('users-profile/') }}">
                    <i class="bi bi-person-circle"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('pages-contact/') }}">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('pages-register/') }}">
                    <i class="bi bi-r-circle-fill"></i>
                    <span>Register</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('pages-login/') }}">
                    <i class="bi bi-box-arrow-in-left"></i>
                    <span>Log Out</span>
                </a>
            </li><!-- End Login Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->


    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('assets/vendor/apexcharts/apexcharts.min.js') }} "></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ URL::asset('assets/vendor/chart.js/chart.umd.js') }} "></script>
    <script src="{{ URL::asset('assets/vendor/echarts/echarts.min.js') }} "></script>
    <script src="{{ URL::asset('assets/vendor/quill/quill.min.js') }} "></script>
    <script src="{{ URL::asset('assets/vendor/simple-datatables/simple-datatables.js') }} "></script>
    <script src="{{ URL::asset('assets/vendor/tinymce/tinymce.min.js') }} "></script>
    <script src="{{ URL::asset('assets/vendor/php-email-form/validate.js') }} "></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
