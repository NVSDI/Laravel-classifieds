
	

<nav class="container">
      <div class="col-12">
          <ul>
            <li><a class="active" href="/">Home</a></li>
            <li><a href="/categories/1">Is Ilanalri</a></li>
            <li><a href="/categories/2">Kiralik</a></li>
            <li><a href="/categories/3">Hizmetler</a></li>
            <li>
               <a href="{{ action('AdvertsController@create') }}">Post An Ad</a>
            </li>
            @if(Auth::check())
              <li>
                  <a href="/users/logout"> Logout </a> 
                  @role('manager')
                    <li><a href="/admin">Admin</a></li>
                  @endrole
              </li>
            @else
                <li> <a href="/users/register"> Register</a> </li>
                <li> <a href="/users/login"> Login</a> </li>
            @endif
          </ul>
      </div>
</nav>