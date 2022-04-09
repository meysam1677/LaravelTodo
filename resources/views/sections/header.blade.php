<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
        <img src="/image/logo2.png" alt="" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 px-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">صفحه اصلی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/?complated=0">در حال انتظار</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/?complated=1">انجام شده</a>
        </li>
      </ul>
      <form action="{{ route('todos.search')}}" method="GET" class="d-flex">
        {{-- @csrf --}}
        <input class="form-control mx-2" type="search" name="search" placeholder="برای جست‌وجو اینجا وارد کنید" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">جست‌و‌جو</button>
      </form>
    </div>
  </div>
</nav>
