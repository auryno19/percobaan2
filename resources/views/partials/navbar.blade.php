<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="logo.png" alt="logo" height="30" class="d-inline-block align-text-top">
      
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class= "nav-link {{ ($title === "Home") ? 'active' : '' }}"  href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === "Biodata") ? 'active' : '' }}" href="/about">Biodata</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === "Komentar") ? 'active' : '' }}" href="/komentar">Komentar</a>
            </li>
            
        </ul>
       
        </div>
    </div>
    </nav>