<x-app-layout>

    <link rel="stylesheet" href="/css/estilos_act.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />



    <!-- JavaScript Typed -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/typed.js@2.0.12') }}" defer></script>


    <!-- JavaScript Local -->


    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <div class="ConsIncEsp">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1 class="TextEst"><span class="typed"></span></h1>

                </div>
                <div class="col">
                    <img id="ImgAct" src="/img/undraw_chore_list_re_2lq8.svg" alt="Imagen de agenda">
                </div>
            </div>
        </div>


        <svg preserveAspectRatio="none" class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#2EFFAB" fill-opacity="1"
                d="M0,192L80,165.3C160,139,320,85,480,101.3C640,117,800,203,960,224C1120,245,1280,203,1360,181.3L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>

    </div>



    <div id="MarCont" class="container">
        <div class="row">
            <form action="">
                <input id="CajaBus" type="search" placeholder="Buscar Actividad">
                <button class="BtnSmit" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="row mb-4 EspContEsta">
            <div class="col">
                <div class="TarjetEst">
                    <h1>Dia:6</h1>
                </div>
            </div>
            <div class="col">
                <div class="TarjetEst">
                    <h1>Semana:10</h1>
                </div>
            </div>
            <div class="col">
                <div class="TarjetEst">
                    <h1>Mes:20</h1>
                </div>
            </div>
            <div class="col">
                <div class="TarjetEst">
                    <h1>Total:30</h1>
                </div>
            </div>

        </div>
        <div id="RowMar" class="row">
            <div class="col col-lg-1 efect">

                <div class="BarraLat">
                    <button onclick="AgregaClick()"><i class="StyleItem fa-solid fa-square-plus"></i></button>
                    <i class="StyleItem fa-solid fa-trash-can"></i>
                    <i class="StyleItem fa-solid fa-pen-to-square"></i>
                    <i class="StyleItem fa-solid fa-circle-info"></i>
                </div>







            </div>
            <div class="efect1 col-lg">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="Activity">
                                <div class="row">
                                    <div class="col col-lg-1">
                                        <img src="/img/Parasite.png" alt="">
                                    </div>
                                    <div class="col">
                                        <p class="ActTitulo"> <strong>Desparacitacion</strong></p>
                                        <p class="ActDescripcion">Aplicando Ivermectina via subcotanea y Albendazol via
                                            oral, para
                                            la
                                            eliminacion de los parasitos internos y externos</p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="ActFecha">13 de Diciembre 2022</p>
                                            </div>
                                            <div class="col">
                                                <p class="ActDuracion">Duracion: 3hr</p>
                                            </div>
                                        </div>


                                    </div>

                                </div>


                            </div>
                            <div class="Activity">
                                <div class="row">
                                    <div class="col col-lg-1">
                                        <img src="/img/Parasite.png" alt="">
                                    </div>
                                    <div class="col">
                                        <p class="ActTitulo"> <strong>Desparacitacion</strong></p>
                                        <p class="ActDescripcion">Aplicando Ivermectina via subcotanea y Albendazol via
                                            oral, para
                                            la
                                            eliminacion de los parasitos internos y externos</p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="ActFecha">13 de Diciembre 2022</p>
                                            </div>
                                            <div class="col">
                                                <p class="ActDuracion">Duracion: 3hr</p>
                                            </div>
                                        </div>


                                    </div>

                                </div>


                            </div>
                            <div class="Activity">
                                <div class="row">
                                    <div class="col col-lg-1">
                                        <img src="/img/Parasite.png" alt="">
                                    </div>
                                    <div class="col">
                                        <p class="ActTitulo"> <strong>Desparacitacion</strong></p>
                                        <p class="ActDescripcion">Aplicando Ivermectina via subcotanea y Albendazol via
                                            oral, para
                                            la
                                            eliminacion de los parasitos internos y externos</p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="ActFecha">13 de Diciembre 2022</p>
                                            </div>
                                            <div class="col">
                                                <p class="ActDuracion">Duracion: 3hr</p>
                                            </div>
                                        </div>


                                    </div>

                                </div>


                            </div>
                            <div class="Activity">
                                <div class="row">
                                    <div class="col col-lg-1">
                                        <img src="/img/Parasite.png" alt="">
                                    </div>
                                    <div class="col">
                                        <p class="ActTitulo"> <strong>Desparacitacion</strong></p>
                                        <p class="ActDescripcion">Aplicando Ivermectina via subcotanea y Albendazol via
                                            oral, para
                                            la
                                            eliminacion de los parasitos internos y externos</p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="ActFecha">13 de Diciembre 2022</p>
                                            </div>
                                            <div class="col">
                                                <p class="ActDuracion">Duracion: 3hr</p>
                                            </div>
                                        </div>


                                    </div>

                                </div>


                            </div>
                            <div class="Activity">
                                <div class="row">
                                    <div class="col col-lg-1">
                                        <img src="/img/Parasite.png" alt="">
                                    </div>
                                    <div class="col">
                                        <p class="ActTitulo"> <strong>Desparacitacion</strong></p>
                                        <p class="ActDescripcion">Aplicando Ivermectina via subcotanea y Albendazol via
                                            oral, para
                                            la
                                            eliminacion de los parasitos internos y externos</p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="ActFecha">13 de Diciembre 2022</p>
                                            </div>
                                            <div class="col">
                                                <p class="ActDuracion">Duracion: 3hr</p>
                                            </div>
                                        </div>


                                    </div>

                                </div>


                            </div>
                            <div class="Activity">
                                <div class="row">
                                    <div class="col col-lg-1">
                                        <img src="/img/Parasite.png" alt="">
                                    </div>
                                    <div class="col">
                                        <p class="ActTitulo"> <strong>Desparacitacion</strong></p>
                                        <p class="ActDescripcion">Aplicando Ivermectina via subcotanea y Albendazol via
                                            oral, para
                                            la
                                            eliminacion de los parasitos internos y externos</p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="ActFecha">13 de Diciembre 2022</p>
                                            </div>
                                            <div class="col">
                                                <p class="ActDuracion">Duracion: 3hr</p>
                                            </div>
                                        </div>


                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>






            </div>





        </div>


        <!--
        <h1 id="NewActyvitiText">gestionar actividad</h1>

        <form>
            <div class="row">
                <div class="col">
                    <div class="CardNextAct1">

                        <label for="exampleFormControlInput1" class="Textstyle">Seleccione la actividad</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Actividades</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Desparacitación</option>
                                <option value="1">Vitaminacion</option>
                                <option value="2">Descorne</option>
                                <option value="3">Aplicacion de vacuna contra pierna negra</option>
                                <option value="4">Aplicacion de vacuna contra Bruselosis</option>
                                <option value="5">Aplicacion de vacuna contra Antrax</option>
                                <option value="6">Prueba de Mastiti subclinica</option>
                                <option value="7">Aplicacion de vacuna contra Lectopirosis</option>
                            </select>
                        </div>
                        <label for="exampleFormControlInput1" class="Textstyle">Elija una imagen</label>
                        <div class="input-group mb-3">

                            <input type="file" class="form-control" id="inputGroupFile02">

                        </div>
                        <label for="exampleFormControlInput1" class="Textstyle">Seleccione la fecha</label>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Fecha</label>
                            <input type="date" class="form-control"
                                aria-label="Text input with segmented dropdown button">

                        </div>
                        <label for="exampleFormControlInput1" class="Textstyle">Elija la hora</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Hora</label>
                            <input type="time" class="form-control"
                                aria-label="Text input with segmented dropdown button">

                        </div>
                        <label for="exampleFormControlInput1" class="Textstyle">Defina la duracción</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Duración</label>
                            <input type="time" class="form-control"
                                aria-label="Text input with segmented dropdown button">

                        </div>

                    </div>

                </div>
                <div class="col">
                    <div class="CardNextAct">
                        <h1 id="TextSejmp">Selección de ejemplares</h1>
                        <input id="CajaBusE" type="search" placeholder="Buscar Ejemplar">
                        <button class="BtnSmit" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <table class="table table-striped">
                            <tr>
                                <th>N° Chapa</th>
                                <th>Nombre</th>
                                <th>Raza</th>
                            </tr>
                            <tr>
                                <td>324356</td>
                                <td>Preciosa</td>
                                <td>Braman</td>
                            </tr>
                            <tr>
                                <td>345357</td>
                                <td>La negra</td>
                                <td>Vorderwald</td>
                            </tr>
                            <tr>
                                <td>320987</td>
                                <td>Pinta</td>
                                <td>Braman</td>
                            </tr>
                            <tr>
                                <td>920t67</td>
                                <td>Cuernuda</td>
                                <td>Braford australiano</td>
                            </tr>
                            <tr>
                                <td>9wt67r</td>
                                <td>Sarca</td>
                                <td>Braford australiano</td>
                            </tr>

                        </table>

                    </div>


                </div>
            </div>
        </form>
-->

    </div>
    <br><br><br><br><br><br><br><br>





    <div id="modal" class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gestionar Actividad</h5>

                </div>
                <div class="modal-body">
                    <label for="exampleFormControlInput1" class="Textstyle">Seleccione la actividad</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Actividades</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Desparacitación</option>
                            <option value="1">Vitaminacion</option>
                            <option value="2">Descorne</option>
                            <option value="3">Aplicacion de vacuna contra pierna negra</option>
                            <option value="4">Aplicacion de vacuna contra Bruselosis</option>
                            <option value="5">Aplicacion de vacuna contra Antrax</option>
                            <option value="6">Prueba de Mastiti subclinica</option>
                            <option value="7">Aplicacion de vacuna contra Lectopirosis</option>
                        </select>
                    </div>
                    <label for="exampleFormControlInput1" class="Textstyle">Elija una imagen</label>
                    <div class="input-group mb-3">

                        <input type="file" class="form-control" id="inputGroupFile02">

                    </div>
                    <label for="exampleFormControlInput1" class="Textstyle">Seleccione la fecha</label>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Fecha</label>
                        <input type="date" class="form-control" aria-label="Text input with segmented dropdown button">

                    </div>
                    <label for="exampleFormControlInput1" class="Textstyle">Elija la hora</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Hora</label>
                        <input type="time" class="form-control" aria-label="Text input with segmented dropdown button">

                    </div>
                    <label for="exampleFormControlInput1" class="Textstyle">Defina la duracción</label>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Duración</label>
                        <input type="time" class="form-control" aria-label="Text input with segmented dropdown button">

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Guarda</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('js/Dom-Act.js')}}" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>


</x-app-layout>