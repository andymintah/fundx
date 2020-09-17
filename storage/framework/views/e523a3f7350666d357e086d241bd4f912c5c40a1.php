<?php $__env->startSection('content'); ?>


<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">My Profile</a>
      <ul class="navbar-nav px-3">
      <li class="nav-item">
                <a class="nav-link" href="/home">
                  Home
                </a>
              </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/profile">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/userprofile/show/ Auth::user()->id->">
                  <span data-feather="file"></span>
                  Personal Information
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/campaign/mindex">
                  <span data-feather="shopping-cart"></span>
                  My Fundraisers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/donation/mindex">
                  <span data-feather="users"></span>
                  My Donations
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  More
                </a>
              </li>
             
            </ul>

           
          </div>
        </nav>

      



<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/fundx/resources/views/profile/dashboard.blade.php ENDPATH**/ ?>