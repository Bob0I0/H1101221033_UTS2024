@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
  <div class="col-lg-7 w-full flex justify-right">
    <div class="card">
      <div class="card-header pb-0 p-3">
        <h6 class="mb-2">Master Jabatan</h6>
      </div>
      <div class="card-body p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Bob</h6>
                <span class="text-xs">Manager</span></span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Udin</h6>
                <span class="text-xs">Programmmer</span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Caca</h6>
                <span class="text-xs">Staff</span></span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Gon</h6>
                <span class="text-xs font-weight-bold">Staff</span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection