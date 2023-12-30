  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('admin') }}">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li>
          <!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('postContent') }}">
                  <i class="bi bi-file-post"></i>
                  <span>Post Content</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('category') }}">
                  <i class="bi bi-bookmarks-fill"></i>
                  <span>Category</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('member.index') }}">
                  <i class="bi bi-person-square"></i>
                  <span>Member</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('position.index') }}">
                  <i class="bi bi-collection-fill"></i>
                  <span>Position</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('team.index') }}">
                  <i class="bi bi-people-fill"></i>
                  <span>Team</span>
              </a>
          </li>


          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('showDonationCard') }}">
                  <i class='bx bxs-coin-stack'></i>
                  <span>Donation</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="/admin/donator?type=&page=1">
                <i class='bx bxs-coin'></i>
                  <span>Donator</span>
              </a>
          </li>


          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('admin/resource') }}">
                  <i class='bi bi-book'></i>
                  <span>Resource</span>
              </a>
          </li>


          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('showAllUser') }}">
                  <i class="bi bi-person-check-fill"></i>
                  <span>User</span>
              </a>
          </li>


          {{-- <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('report') }}">
                  <i class="bi bi-flag-fill"></i>
                  <span>Report</span>
              </a>
          </li> --}}

{{--
          <li class="nav-heading">Pages</li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('users-profile') }}">
                  <i class="bi bi-person"></i>
                  <span>Profile</span>
              </a>
          </li><!-- End Profile Page Nav -->


          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('pages-contact') }}">
                  <i class="bi bi-envelope"></i>
                  <span>Contact</span>
              </a>
          </li><!-- End Contact Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('pages-register') }}">
                  <i class="bi bi-card-list"></i>
                  <span>Register</span>
              </a>
          </li><!-- End Register Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ url('pages-login') }}">
                  <i class="bi bi-box-arrow-in-left"></i>
                  <span>Log Out</span>
              </a>
          </li><!-- End Login Page Nav -->
          --}}

      </ul>

  </aside><!-- End Sidebar-->
