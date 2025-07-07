 <nav class="navbar navbar-expand-lg navbar-custom">
     <div class="container">
         <a class="navbar-brand" href="#">E-Data</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ms-auto align-items-center">
                 <li class="nav-item">
                     <a class="nav-link nav-hover {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link nav-hover {{ request()->is('dosen*') ? 'active' : '' }}"
                         href="{{ route('Dosen.index') }}">Dosen</a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link nav-hover" href="{{ route('MataKuliah.index') }}">Mata Kuliah</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>

 <style>
     /* Background navbar manual */
     .navbar-custom {
         background-color: #1c1c1c;
         /* gelap dan kalem */
         padding: 0.5rem 1rem;
     }

     /* Nav link custom hover */
     .nav-hover {
         color: white !important;
         background-color: transparent;
         padding: 8px 15px;
         border-radius: 5px;
         text-decoration: none;
         transition: background-color 0.3s ease, color 0.3s ease;
         display: inline-block;
         margin-left: 10px;
     }

     .nav-hover:hover {
         background-color: white !important;
         color: black !important;
         text-decoration: none;
     }

     /* Navbar brand */
     .navbar-brand {
         color: white !important;
         font-weight: bold;
         font-size: 24px;
         text-decoration: none;
     }

     /* Navbar toggler icon color override for dark bg */
     .navbar-toggler-icon {
         filter: invert(1);
     }
 </style>
