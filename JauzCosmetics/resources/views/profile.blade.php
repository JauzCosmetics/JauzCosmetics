@extends('template')

@section('profile')
    <section class="vh-50" style="background-color: #f4f5f7;">
        <div class="container py-5 h-50">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col col-lg-10 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0 ">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <i class="fa-solid fa-user display-1 pt-5 pb-3"></i>
                                <h5>{{ Auth::user()->username }}</h5>
                                <p>{{ Auth::user()->rol }}</p>
                                <i class="far fa-edit mb-5"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Username</h6>
                                            <p class="text-muted">{{ Auth::user()->username }}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Rol</h6>
                                            <p class="text-muted">{{ Auth::user()->rol }}</p>
                                        </div>
                                    </div>
                                    <h6>Account</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">{{ Auth::user()->email }}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Creación de cuenta</h6>
                                            <p class="text-muted">{{ Auth::user()->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($addresses->count() > 0)
                            <p class="text-center h3  mb-5 mx-1 mx-md-4 mt-4">Tus direcciones</p>
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h1>Dirección</h1>
                                </div>
                                <div class="col-3 mb-3">
                                    <h3>Pais</h3>
                                </div>
                                <div class="col-3 mb-3">
                                    <h3>Ciudad</h3>
                                </div>
                            </div>
                            <hr class="mt-0 mb-4">
                                @foreach ($addresses as $a)
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <p class="text">{{ $a->address }}</p>
                                        </div>
                                        <div class="col-3 mb-3">
                                            <p class="text">{{ $a->country }}</p>
                                        </div>
                                        <div class="col-3 mb-3">
                                            <p class="text">{{ $a->city }}</p>
                                        </div>
                                    </div>
                                    <hr class="mt-0 mb-4">
                                @endforeach
                            @else
                                <p class="text-center h3  mb-5 mx-1 mx-md-4 mt-4 pt-4">¡Añade alguna dirección para realizar
                                    pedidos!</p>
                            @endif
                            <!-- Modal trigger button -->
                            <div class="d-flex justify-content-center align-items-center w-100 pb-4">
                               <button type="button" class="btn bgpropio btn-lg w-50 text-center text-white" data-bs-toggle="modal" data-bs-target="#modalId">
                              Añade una direccion
                            </button>
                            </div>


                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId">Agregar dirección</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body p-4">
                                                <form method="POST" action="{{ route('crear_direccion', Auth::user()->id) }}">
                                                    @csrf
                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        {{-- <i class="fas fa-map-location fa-lg me-3 fa-fw pb-5"></i> --}}
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label for="address"
                                                                class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>
                                                            <input id="address" type="address" class="form-control" name="address" required>
                                                            <label for="country"
                                                                class="col-md-4 col-form-label text-md-right">{{ __('País') }}</label><br>
                                                            <select name="country">
                                                                <option value="AF">Afganistán</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DE">Alemania</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="AO">Angola</option>
                                                                <option value="AI">Anguilla</option>
                                                                <option value="AQ">Antártida</option>
                                                                <option value="AG">Antigua y Barbuda</option>
                                                                <option value="AN">Antillas Holandesas</option>
                                                                <option value="SA">Arabia Saudí</option>
                                                                <option value="DZ">Argelia</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AW">Aruba</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaiyán</option>
                                                                <option value="BS">Bahamas</option>
                                                                <option value="BH">Bahrein</option>
                                                                <option value="BD">Bangladesh</option>
                                                                <option value="BB">Barbados</option>
                                                                <option value="BE">Bélgica</option>
                                                                <option value="BZ">Belice</option>
                                                                <option value="BJ">Benin</option>
                                                                <option value="BM">Bermudas</option>
                                                                <option value="BY">Bielorrusia</option>
                                                                <option value="MM">Birmania</option>
                                                                <option value="BO">Bolivia</option>
                                                                <option value="BA">Bosnia y Herzegovina</option>
                                                                <option value="BW">Botswana</option>
                                                                <option value="BR">Brasil</option>
                                                                <option value="BN">Brunei</option>
                                                                <option value="BG">Bulgaria</option>
                                                                <option value="BF">Burkina Faso</option>
                                                                <option value="BI">Burundi</option>
                                                                <option value="BT">Bután</option>
                                                                <option value="CV">Cabo Verde</option>
                                                                <option value="KH">Camboya</option>
                                                                <option value="CM">Camerún</option>
                                                                <option value="CA">Canadá</option>
                                                                <option value="TD">Chad</option>
                                                                <option value="CL">Chile</option>
                                                                <option value="CN">China</option>
                                                                <option value="CY">Chipre</option>
                                                                <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                                                <option value="CO">Colombia</option>
                                                                <option value="KM">Comores</option>
                                                                <option value="CG">Congo</option>
                                                                <option value="CD">Congo, República Democrática del</option>
                                                                <option value="KR">Corea</option>
                                                                <option value="KP">Corea del Norte</option>
                                                                <option value="CI">Costa de Marfíl</option>
                                                                <option value="CR">Costa Rica</option>
                                                                <option value="HR">Croacia (Hrvatska)</option>
                                                                <option value="CU">Cuba</option>
                                                                <option value="DK">Dinamarca</option>
                                                                <option value="DJ">Djibouti</option>
                                                                <option value="DM">Dominica</option>
                                                                <option value="EC">Ecuador</option>
                                                                <option value="EG">Egipto</option>
                                                                <option value="SV">El Salvador</option>
                                                                <option value="AE">Emiratos Árabes Unidos</option>
                                                                <option value="ER">Eritrea</option>
                                                                <option value="SI">Eslovenia</option>
                                                                <option value="ES" selected>España</option>
                                                                <option value="US">Estados Unidos</option>
                                                                <option value="EE">Estonia</option>
                                                                <option value="ET">Etiopía</option>
                                                                <option value="FJ">Fiji</option>
                                                                <option value="PH">Filipinas</option>
                                                                <option value="FI">Finlandia</option>
                                                                <option value="FR">Francia</option>
                                                                <option value="GA">Gabón</option>
                                                                <option value="GM">Gambia</option>
                                                                <option value="GE">Georgia</option>
                                                                <option value="GH">Ghana</option>
                                                                <option value="GI">Gibraltar</option>
                                                                <option value="GD">Granada</option>
                                                                <option value="GR">Grecia</option>
                                                                <option value="GL">Groenlandia</option>
                                                                <option value="GP">Guadalupe</option>
                                                                <option value="GU">Guam</option>
                                                                <option value="GT">Guatemala</option>
                                                                <option value="GY">Guayana</option>
                                                                <option value="GF">Guayana Francesa</option>
                                                                <option value="GN">Guinea</option>
                                                                <option value="GQ">Guinea Ecuatorial</option>
                                                                <option value="GW">Guinea-Bissau</option>
                                                                <option value="HT">Haití</option>
                                                                <option value="HN">Honduras</option>
                                                                <option value="HU">Hungría</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IQ">Irak</option>
                                                                <option value="IR">Irán</option>
                                                                <option value="IE">Irlanda</option>
                                                                <option value="BV">Isla Bouvet</option>
                                                                <option value="CX">Isla de Christmas</option>
                                                                <option value="IS">Islandia</option>
                                                                <option value="KY">Islas Caimán</option>
                                                                <option value="CK">Islas Cook</option>
                                                                <option value="CC">Islas de Cocos o Keeling</option>
                                                                <option value="FO">Islas Faroe</option>
                                                                <option value="HM">Islas Heard y McDonald</option>
                                                                <option value="FK">Islas Malvinas</option>
                                                                <option value="MP">Islas Marianas del Norte</option>
                                                                <option value="MH">Islas Marshall</option>
                                                                <option value="UM">Islas menores de Estados Unidos</option>
                                                                <option value="PW">Islas Palau</option>
                                                                <option value="SB">Islas Salomón</option>
                                                                <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                                                <option value="TK">Islas Tokelau</option>
                                                                <option value="TC">Islas Turks y Caicos</option>
                                                                <option value="VI">Islas Vírgenes (EEUU)</option>
                                                                <option value="VG">Islas Vírgenes 2(Reino Unido)</option>
                                                                <option value="WF">Islas Wallis y Futuna</option>
                                                                <option value="IL">Israel</option>
                                                                <option value="IT">Italia</option>
                                                                <option value="JM">Jamaica</option>
                                                                <option value="JP">Japón</option>
                                                                <option value="JO">Jordania</option>
                                                                <option value="KZ">Kazajistán</option>
                                                                <option value="KE">Kenia</option>
                                                                <option value="KG">Kirguizistán</option>
                                                                <option value="KI">Kiribati</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="LA">Laos</option>
                                                                <option value="LS">Lesotho</option>
                                                                <option value="LV">Letonia</option>
                                                                <option value="LB">Líbano</option>
                                                                <option value="LR">Liberia</option>
                                                                <option value="LY">Libia</option>
                                                                <option value="LI">Liechtenstein</option>
                                                                <option value="LT">Lituania</option>
                                                                <option value="LU">Luxemburgo</option>
                                                                <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                                                <option value="MG">Madagascar</option>
                                                                <option value="MY">Malasia</option>
                                                                <option value="MW">Malawi</option>
                                                                <option value="MV">Maldivas</option>
                                                                <option value="ML">Malí</option>
                                                                <option value="MT">Malta</option>
                                                                <option value="MA">Marruecos</option>
                                                                <option value="MQ">Martinica</option>
                                                                <option value="MU">Mauricio</option>
                                                                <option value="MR">Mauritania</option>
                                                                <option value="YT">Mayotte</option>
                                                                <option value="MX">México</option>
                                                                <option value="FM">Micronesia</option>
                                                                <option value="MD">Moldavia</option>
                                                                <option value="MC">Mónaco</option>
                                                                <option value="MN">Mongolia</option>
                                                                <option value="MS">Montserrat</option>
                                                                <option value="MZ">Mozambique</option>
                                                                <option value="NA">Namibia</option>
                                                                <option value="NR">Nauru</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="NI">Nicaragua</option>
                                                                <option value="NE">Níger</option>
                                                                <option value="NG">Nigeria</option>
                                                                <option value="NU">Niue</option>
                                                                <option value="NF">Norfolk</option>
                                                                <option value="NO">Noruega</option>
                                                                <option value="NC">Nueva Caledonia</option>
                                                                <option value="NZ">Nueva Zelanda</option>
                                                                <option value="OM">Omán</option>
                                                                <option value="NL">Países Bajos</option>
                                                                <option value="PA">Panamá</option>
                                                                <option value="PG">Papúa Nueva Guinea</option>
                                                                <option value="PK">Paquistán</option>
                                                                <option value="PY">Paraguay</option>
                                                                <option value="PE">Perú</option>
                                                                <option value="PN">Pitcairn</option>
                                                                <option value="PF">Polinesia Francesa</option>
                                                                <option value="PL">Polonia</option>
                                                                <option value="PT">Portugal</option>
                                                                <option value="PR">Puerto Rico</option>
                                                                <option value="QA">Qatar</option>
                                                                <option value="UK">Reino Unido</option>
                                                                <option value="CF">República Centroafricana</option>
                                                                <option value="CZ">República Checa</option>
                                                                <option value="ZA">República de Sudáfrica</option>
                                                                <option value="DO">República Dominicana</option>
                                                                <option value="SK">República Eslovaca</option>
                                                                <option value="RE">Reunión</option>
                                                                <option value="RW">Ruanda</option>
                                                                <option value="RO">Rumania</option>
                                                                <option value="RU">Rusia</option>
                                                                <option value="EH">Sahara Occidental</option>
                                                                <option value="KN">Saint Kitts y Nevis</option>
                                                                <option value="WS">Samoa</option>
                                                                <option value="AS">Samoa Americana</option>
                                                                <option value="SM">San Marino</option>
                                                                <option value="VC">San Vicente y Granadinas</option>
                                                                <option value="SH">Santa Helena</option>
                                                                <option value="LC">Santa Lucía</option>
                                                                <option value="ST">Santo Tomé y Príncipe</option>
                                                                <option value="SN">Senegal</option>
                                                                <option value="SC">Seychelles</option>
                                                                <option value="SL">Sierra Leona</option>
                                                                <option value="SG">Singapur</option>
                                                                <option value="SY">Siria</option>
                                                                <option value="SO">Somalia</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="PM">St Pierre y Miquelon</option>
                                                                <option value="SZ">Suazilandia</option>
                                                                <option value="SD">Sudán</option>
                                                                <option value="SE">Suecia</option>
                                                                <option value="CH">Suiza</option>
                                                                <option value="SR">Surinam</option>
                                                                <option value="TH">Tailandia</option>
                                                                <option value="TW">Taiwán</option>
                                                                <option value="TZ">Tanzania</option>
                                                                <option value="TJ">Tayikistán</option>
                                                                <option value="TF">Territorios franceses del Sur</option>
                                                                <option value="TP">Timor Oriental</option>
                                                                <option value="TG">Togo</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TT">Trinidad y Tobago</option>
                                                                <option value="TN">Túnez</option>
                                                                <option value="TM">Turkmenistán</option>
                                                                <option value="TR">Turquía</option>
                                                                <option value="TV">Tuvalu</option>
                                                                <option value="UA">Ucrania</option>
                                                                <option value="UG">Uganda</option>
                                                                <option value="UY">Uruguay</option>
                                                                <option value="UZ">Uzbekistán</option>
                                                                <option value="VU">Vanuatu</option>
                                                                <option value="VE">Venezuela</option>
                                                                <option value="VN">Vietnam</option>
                                                                <option value="YE">Yemen</option>
                                                                <option value="YU">Yugoslavia</option>
                                                                <option value="ZM">Zambia</option>
                                                                <option value="ZW">Zimbabue</option>
                                                            </select>
                                                            <br>
                                                            <label for="city"
                                                                class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>
                                                            <input id="city" type="city" class="form-control" name="city" required>
                                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 pt-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    {{ __('Guardar dirección') }}
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Optional: Place to the bottom of scripts -->
                            <script>
                                const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
