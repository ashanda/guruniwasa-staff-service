<div class="container-fluid py-2 bg-light1 {{!isset($homeHeader) ? 'non_homePage':'homePage'}}">
    <div class="row justify-content-end align-items-center">
        <div class="col-lg-4 text-lg-end text-center">

                <a class="social-button text-white hvr-wobble-bottom" href=" " target="_blank">
                <i class="fa  fa-phone font-16"></i>
                </a>
                <a class="social-button text-white hvr-wobble-bottom" href="" target="_blank">
                <i class="fa fa-message font-16"></i>
                </a>
                <a class="social-button text-white hvr-wobble-bottom" href=" " target="_blank">
                <i class="fa  fa-bell font-16"></i>
                </a>
                <a class="social-button text-white hvr-wobble-bottom" href="{{ route('web.profile') }}"  >
                <i class="fa  fa-user font-16"></i>
                </a>
                <a class="social-button text-white hvr-wobble-bottom" href="{{ route('web.profile') }}"  >
                    <i class="fa fa-right-from-bracket font-16"></i>
                    </a>
        </div>
    </div>

</div>

