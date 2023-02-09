<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      /* Style the treeview */
      .treeview {
        list-style: none;
        margin: 0;
        padding: 0;
      }
      .treeview a {
        text-decoration: none;
        color:black;
      }
      .treeview span {
        cursor: pointer;
      }
      .treeview ul {
        display: none;
      }
    </style>
  </head>
  <body>
    <l class="treeview">
      <li>
        <a href="#">
          <i class="fa fa-dashboard"></i>
          <span>General</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
          <a href="{{ route('teachers.index') }}"
       class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}">
        <i class="fas fa-user-circle"></i><span> &nbsp;Teachers</span>
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
 
<li class="nav-item">
    <a href="{{ route('semesters.index') }}"
       class="nav-link {{ Request::is('semesters*') ? 'active' : '' }}">
        
       <i class="fa fa-cog"></i><span> &nbsp;Semester</span>

    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admissions.index') }}"
       class="nav-link {{ Request::is('admissions*') ? 'active' : '' }}">
        <i class="fas fa-graduation-cap"></i><span> &nbsp;admissions</span>
    </a>
</li>
        </ul>
      </li>
    </ul>
    <script>
      // JavaScript code to toggle the treeview menu
      var treeviewLinks = document.querySelectorAll(".treeview a");
      for (var i = 0; i < treeviewLinks.length; i++) {
        treeviewLinks[i].addEventListener("click", function(e) {
          var parent = e.currentTarget.parentElement;
          var children = parent.querySelector(".treeview-menu");
          if (children) {
            children.style.display = (children.style.display === "block") ? "none" : "block";
            e.currentTarget.querySelector(".fa-angle-left").classList.toggle("fa-angle-down");
          }
        });
      }
    </script>
  </body>
</html>
