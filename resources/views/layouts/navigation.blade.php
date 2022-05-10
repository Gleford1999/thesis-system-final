<header>
<nav class="relative w-full flex flex-wrap items-center justify-between py-4 bg-maroon-100 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg" style="font-family: Century Gothic">
  <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
    <div class="container-fluid">
      <a class="flex items-center text-gray-900 hover:text-gray-900 focus:text-gray-900 mt-2 lg:mt-0 mr-1" href="dashboard">
        <img class="mr-2" src="/img/logo (2).png" style="height: 60px" alt="cdsga-logo" loading="lazy" />
        <span class="font-medium text-white" style="font-size: 20px;">Colegio de San Gabriel Arcangel</span>
      </a>
    </div>

    <div class="flex">
      @auth
        <span class="text-white p-2 px-5 py-2">Welcome, {{ auth()->user()->firstName }}!</span>
       
          <div class="ml-5">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="text-lg font-semibold border border-solid rounded" style="padding: 5px; color: black; background-color: lightgray; width: 100px; border-color:black;">
                    Log out
                </button>
            </form>
        @endauth
          </div>
    </div>
  </div>
</nav>
</header>


<!-- <footer>

  <div class="footer" style="position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 10%;
    font-size: 15px;
    font-family: Century Gothic;
    background-color: lightgray;
    box-shadow: 10px 10px 10px 15px rgba(0,0,0,0.5); 
    color: black;
    text-align: center;">
    <span><strong><strong></span><br>
    <span><strong>ONLINE GRADE PROFILING AND TRANSCRIPT OF RECORD GENERATOR SYSTEM<strong></span><br>
    <span>BACHELOR OF SCIENCE IN COMPUTER SCIENCE 2022</span>
  </div>

</footer> -->