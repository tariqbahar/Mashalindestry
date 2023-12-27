@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

    
    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h6 class="card-title mb-0">About</h6>
              <div>
                <img class="wd-70 rounded-circle" src="https://via.placeholder.com/100x100" alt="profile">
                <span class="h4 ms-3 text-dark">Amiah Burton</span>
              </div>
              <div class="dropdown">
                <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="git-branch" class="icon-sm me-2"></i> <span class="">Update</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View all</span></a>
                </div>
              </div>
            </div>
            <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of Social.</p>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
              <p class="text-muted">November 15, 2015</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
              <p class="text-muted">New York, USA</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
              <p class="text-muted">me@nobleui.com</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
              <p class="text-muted">www.nobleui.com</p>
            </div>
            <div class="mt-3 d-flex social-links">
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="github"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="twitter"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-6 middle-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="card rounded">
              <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
                    <div class="ms-2">
                      <p>Mike Popescu</p>
                      <p class="tx-11 text-muted">1 min ago</p>
                    </div>
                  </div>
                  <div class="dropdown">
                    <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="meh" class="icon-sm me-2"></i> <span class="">Unfollow</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="corner-right-up" class="icon-sm me-2"></i> <span class="">Go to post</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="share-2" class="icon-sm me-2"></i> <span class="">Share</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="copy" class="icon-sm me-2"></i> <span class="">Copy link</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus minima delectus nemo unde quae recusandae assumenda.</p>
                <img class="img-fluid" src="https://via.placeholder.com/689x430" alt="">
              </div>
              <div class="card-footer">
                <div class="d-flex post-actions">
                  <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                    <i class="icon-md" data-feather="heart"></i>
                    <p class="d-none d-md-block ms-2">Like</p>
                  </a>
                  <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                    <i class="icon-md" data-feather="message-square"></i>
                    <p class="d-none d-md-block ms-2">Comment</p>
                  </a>
                  <a href="javascript:;" class="d-flex align-items-center text-muted">
                    <i class="icon-md" data-feather="share"></i>
                    <p class="d-none d-md-block ms-2">Share</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card rounded">
              <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
                    <div class="ms-2">
                      <p>Mike Popescu</p>
                      <p class="tx-11 text-muted">5 min ago</p>
                    </div>
                  </div>
                  <div class="dropdown">
                    <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="meh" class="icon-sm me-2"></i> <span class="">Unfollow</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="corner-right-up" class="icon-sm me-2"></i> <span class="">Go to post</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="share-2" class="icon-sm me-2"></i> <span class="">Share</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="copy" class="icon-sm me-2"></i> <span class="">Copy link</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <img class="img-fluid" src="https://via.placeholder.com/689x430" alt="">
              </div>
              <div class="card-footer">
                <div class="d-flex post-actions">
                  <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                    <i class="icon-md" data-feather="heart"></i>
                    <p class="d-none d-md-block ms-2">Like</p>
                  </a>
                  <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                    <i class="icon-md" data-feather="message-square"></i>
                    <p class="d-none d-md-block ms-2">Comment</p>
                  </a>
                  <a href="javascript:;" class="d-flex align-items-center text-muted">
                    <i class="icon-md" data-feather="share"></i>
                    <p class="d-none d-md-block ms-2">Share</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- middle wrapper end -->
      <!-- right wrapper start -->
      <div class="d-none d-xl-block col-xl-3">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="card rounded">
              <div class="card-body">
                <h6 class="card-title">latest photos</h6>
                <div class="row ms-0 me-0">
                  <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-2">
                      <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                  </a>
                  <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-2">
                      <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                  </a>
                  <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-2">
                      <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                  </a>
                  <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-2">
                      <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                  </a>
                  <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-2">
                      <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                  </a>
                  <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-2">
                      <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                  </a>
                  <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-0">
                      <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                  </a>
                  <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-0">
                      <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                  </a>
                  <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                    <figure class="mb-0">
                      <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                    </figure>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 grid-margin">
            <div class="card rounded">
              <div class="card-body">
                <h6 class="card-title">suggestions for you</h6>
                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                  <div class="d-flex align-items-center hover-pointer">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                    <div class="ms-2">
                      <p>Mike Popescu</p>
                      <p class="tx-11 text-muted">12 Mutual Friends</p>
                    </div>
                  </div>
                  <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                </div>
                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                  <div class="d-flex align-items-center hover-pointer">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                    <div class="ms-2">
                      <p>Mike Popescu</p>
                      <p class="tx-11 text-muted">12 Mutual Friends</p>
                    </div>
                  </div>
                  <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                </div>
                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                  <div class="d-flex align-items-center hover-pointer">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                    <div class="ms-2">
                      <p>Mike Popescu</p>
                      <p class="tx-11 text-muted">12 Mutual Friends</p>
                    </div>
                  </div>
                  <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                </div>
                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                  <div class="d-flex align-items-center hover-pointer">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                    <div class="ms-2">
                      <p>Mike Popescu</p>
                      <p class="tx-11 text-muted">12 Mutual Friends</p>
                    </div>
                  </div>
                  <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                </div>
                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                  <div class="d-flex align-items-center hover-pointer">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                    <div class="ms-2">
                      <p>Mike Popescu</p>
                      <p class="tx-11 text-muted">12 Mutual Friends</p>
                    </div>
                  </div>
                  <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                </div>
                <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-center hover-pointer">
                    <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">											
                    <div class="ms-2">
                      <p>Mike Popescu</p>
                      <p class="tx-11 text-muted">12 Mutual Friends</p>
                    </div>
                  </div>
                  <button class="btn btn-icon border-0"><i data-feather="user-plus"></i></button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- right wrapper end -->
    </div>

</div>

@endsection