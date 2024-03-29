@extends('layout.main')
@section('content')
<style>
  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
</style>
<div class="container-fluid py-4 px-6">
  <div class="col-lg-6 w-full flex justify-right">
    <div class="card">
      <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-center">
          <h5 class="mb-2">Presensi Pegawai</h5>
        </div>
      </div>
      <div class="card-body p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="text-center">
                <p class="text-xs font-weight-bold mb-0">Tanggal:</p>
                <h6 class="text-sm mb-0">25 Maret 2024</h6>
              </div>
            </div>
              <div class="text-center">
                <div class="form-check">
                  <div class="dropdown">
                    <span>Kehadiran</span>
                    <div class="dropdown-content">
                      <div class="form-check">
                        <label class="form-check-label" for="udin-checkbox">Udin</label>
                        <input class="form-check-input" type="checkbox" id="udin-checkbox" unchecked onchange="recordTimestamp('udin-checkbox', 'udin-timestamp')">
                        <span id="udin-timestamp"></span>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="Bob-checkbox">Bob</label>
                        <input class="form-check-input" type="checkbox" id="Bob-checkbox" unchecked onchange="recordTimestamp('Bob-checkbox', 'Bob-timestamp')">
                        <span id="Bob-timestamp"></span>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="Caca-checkbox">Caca</label>
                        <input class="form-check-input" type="checkbox" id="Caca-checkbox" unchecked onchange="recordTimestamp('Caca-checkbox', 'Caca-timestamp')">
                        <span id="Caca-timestamp"></span>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="Gon-checkbox">Gon</label>
                        <input class="form-check-input" type="checkbox" id="Gon-checkbox" unchecked onchange="recordTimestamp('Gon-checkbox', 'Gon-timestamp')">
                        <span id="Gon-timestamp"></span>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="text-center">
                <p class="text-xs font-weight-bold mb-0">Tanggal:</p>
                <h6 class="text-sm mb-0">26 Maret 2024</h6>
              </div>
            </div>
              <div class="text-center">
                <div class="form-check">
                  <div class="dropdown">
                    <span>Kehadiran</span>
                    <div class="dropdown-content">
                      <div class="form-check">
                        <label class="form-check-label" for="udin-checkbox">Udin</label>
                        <input class="form-check-input" type="checkbox" id="udin-checkbox" unchecked onchange="recordTimestamp('udin-checkbox', 'udin-timestamp')">
                        <span id="udin-timestamp"></span>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="Bob-checkbox">Bob</label>
                        <input class="form-check-input" type="checkbox" id="Bob-checkbox" unchecked onchange="recordTimestamp('Bob-checkbox', 'Bob-timestamp')">
                        <span id="Bob-timestamp"></span>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="Caca-checkbox">Caca</label>
                        <input class="form-check-input" type="checkbox" id="Caca-checkbox" unchecked onchange="recordTimestamp('Caca-checkbox', 'Caca-timestamp')">
                        <span id="Caca-timestamp"></span>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="Gon-checkbox">Gon</label>
                        <input class="form-check-input" type="checkbox" id="Gon-checkbox" unchecked onchange="recordTimestamp('Gon-checkbox', 'Gon-timestamp')">
                        <span id="Gon-timestamp"></span>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="text-center">
                <p class="text-xs font-weight-bold mb-0">Tanggal:</p>
                <h6 class="text-sm mb-0">27 Maret 2024</h6>
              </div>
            </div>
              <div class="text-center">
                <div class="form-check">
                  <div class="dropdown">
                    <span>Kehadiran</span>
                    <div class="dropdown-content">
                      <div class="form-check">
                        <label class="form-check-label" for="udin-checkbox">Udin</label>
                        <input class="form-check-input" type="checkbox" id="udin-checkbox" unchecked onchange="recordTimestamp('udin-checkbox', 'udin-timestamp')">
                        <span id="udin-timestamp"></span>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="Bob-checkbox">Bob</label>
                        <input class="form-check-input" type="checkbox" id="Bob-checkbox" unchecked onchange="recordTimestamp('Bob-checkbox', 'Bob-timestamp')">
                        <span id="Bob-timestamp"></span>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="Caca-checkbox">Caca</label>
                        <input class="form-check-input" type="checkbox" id="Caca-checkbox" unchecked onchange="recordTimestamp('Caca-checkbox', 'Caca-timestamp')">
                        <span id="Caca-timestamp"></span>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="Gon-checkbox">Gon</label>
                        <input class="form-check-input" type="checkbox" id="Gon-checkbox" unchecked onchange="recordTimestamp('Gon-checkbox', 'Gon-timestamp')">
                        <span id="Gon-timestamp"></span>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
            <div class="d-flex align-items-center">
            <div class="text-center">
                <p class="text-xs font-weight-bold mb-0">Tanggal:</p>
                <h6 class="text-sm mb-0">28 Maret 2024</h6>
              </div>
            </div>
              <div class="text-center">
                <div class="form-check">
                  <div class="dropdown">
                    <span>Kehadiran</span>
                    <div class="dropdown-content">
                      <div class="form-check">
                        <label class="form-check-label" for="udin-checkbox">Udin</label>
                        <input class="form-check-input" type="checkbox" id="udin-checkbox" unchecked onchange="recordTimestamp('udin-checkbox', 'udin-timestamp')">
                        <span id="udin-timestamp"></span>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="Bob-checkbox">Bob</label>
                        <input class="form-check-input" type="checkbox" id="Bob-checkbox" unchecked onchange="recordTimestamp('Bob-checkbox', 'Bob-timestamp')">
                        <span id="Bob-timestamp"></span>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="Caca-checkbox">Caca</label>
                        <input class="form-check-input" type="checkbox" id="Caca-checkbox" unchecked onchange="recordTimestamp('Caca-checkbox', 'Caca-timestamp')">
                        <span id="Caca-timestamp"></span>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label" for="Gon-checkbox">Gon</label>
                        <input class="form-check-input" type="checkbox" id="Gon-checkbox" unchecked onchange="recordTimestamp('Gon-checkbox', 'Gon-timestamp')">
                        <span id="Gon-timestamp"></span>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection