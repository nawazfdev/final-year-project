 
    
  

 


<li class="nav-item">
    <a href="{{ route('teachers.index') }}"
       class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}">
        <i class="fas fa-user-circle"></i><span> &nbsp;Teachers</span>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admissions.index') }}"
       class="nav-link {{ Request::is('admissions*') ? 'active' : '' }}">
        <i class="fas fa-graduation-cap"></i><span> &nbsp;admissions</span>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('faculities.index') }}"
       class="nav-link {{ Request::is('faculities*') ? 'active' : '' }}">
       <i class="fas fa-user-tie"></i><span> &nbsp;Faculities</span>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('academics.index') }}"
       class="nav-link {{ Request::is('academics*') ? 'active' : '' }}">
   
       <i class="fas fa-book"></i><span> &nbsp;Academics</span>

    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classAssignings.index') }}"
       class="nav-link {{ Request::is('classAssignings*') ? 'active' : '' }}">
       <i class="fas fa-chalkboard-teacher"></i><span> &nbsp;Class Assignings</span>

    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classrooms.index') }}"
       class="nav-link {{ Request::is('classrooms*') ? 'active' : '' }}">
       <i class="fas fa-chalkboard-teacher"></i><span> &nbsp;Classrooms</span>

    </a>
</li>

 
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        
       <i class="fas fa-user"></i><span> &nbsp;Users</span>

    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
       
       <i class="fas fa-chalkboard-teacher"></i><span> &nbsp;Roles</span>

    </a>
</li>


<li class="nav-item">
    <a href="{{ route('timeTables.index') }}"
       class="nav-link {{ Request::is('timeTables*') ? 'active' : '' }}">
        <i class="fa fa-calendar"></i><span>&nbsp;Time Tables</span>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('attendances.index') }}"
       class="nav-link {{ Request::is('attendances*') ? 'active' : '' }}">
        <i class="fa fa-calendar"></i><span> &nbsp;Attendance</span>

    </a>
</li>
 

 


 
<!-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dashboard
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        
   
    </div>
</li>
 
 
 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dashboard
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Menu Item 1</a>
          <a class="dropdown-item" href="#">Menu Item 2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Menu Item 3</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
Using custom CSS styles: You can also use custom CSS styles to change the appearance of the dropdown menu. For example, you can use the background-color property to change the background color of the menu.
Copy code
<style>
.dropdown-menu {
  background-color: #f8f9fa;
}
</style>
Using a CSS preprocessor like SASS: Laravel support SASS preprocessor and you can use it to customize the appearance of the dropdown menu.
Copy code
<style>
  $custom-dropdown-bg: #f8f9fa;
  .dropdown-menu {
    background-color: $custom-dropdown-bg;
  }
</style>
Ultimately, the way you choose to style your dropdown menu will depend on your specific design requirements and the tools you have available.
It's worth noting that you can also use third-party libraries like animate.css to add animations to your dropdown menus.



 -->




  <!-- // second
 <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dashboard
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Menu Item 1</a>
        <a class="dropdown-item" href="#">Menu Item 2</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Menu Item 3</a>
    </div>
</li> -->



<!-- third methood -->
 <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle"   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-cog"></i> Dasboard
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('teachers.index') }}"
       class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}">
            <i class="fa fa-user"></i> Teachers
        </a>
        <a class="dropdown-item" href="#">
            <i class="fa fa-lock"></i> Faculity
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">
            <i class="fa fa-sign-out"></i> Academics
        </a>
    </div>
</li> 
