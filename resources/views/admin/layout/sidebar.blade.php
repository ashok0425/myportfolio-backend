<nav id="sidebar" class="sidebar" style="overflow-y: visible!important">
    <div class="sidebar-content js-simplebar">
       @php
           $info=DB::table('infos')->first();
       @endphp
        <a class="sidebar-brand" href="{{ route('dashboard') }}">
  <span class="align-middle"><img src="{{asset($info->image)}}" class="img-fluid main-logo" width="70"></span>
</a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item <?php  echo PAGE=='dashboard'?'active':'' ?>">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
      <i class="fas fa-wallet"></i><span class="align-middle">Dashboard</span>
    </a>
            </li>
          

            <li class="sidebar-item <?php  echo PAGE=='info'?'active':'' ?>">
                <a class="sidebar-link" href="{{ route('infos.index') }}">
      <i class="fas fa-user"></i><span class="align-middle">Info</span>
    </a>
            </li>


            <li class="sidebar-item <?php  echo PAGE=='portfolio'?'active':'' ?>">
                <a class="sidebar-link" href="{{ route('portfolios.index') }}">
      <i class="fas fa-envelope"></i><span class="align-middle">Portfolio</span>
    </a>
            </li>


            <li class="sidebar-item <?php  echo PAGE=='skill'?'active':'' ?>">
                <a class="sidebar-link" href="{{ route('skills.index') }}">
      <i class="fas fa-wrench"></i><span class="align-middle">Skill</span>
    </a>
            </li>


            <li class="sidebar-item <?php  echo PAGE=='contact'?'active':'' ?>">
                <a class="sidebar-link" href="{{ route('contacts.index') }}">
      <i class="fas fa-phone"></i><span class="align-middle">Contact</span>
    </a>
            </li>

        </ul>
    </div>
</nav>