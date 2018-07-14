@include('header')
<div class="uk-container uk-container-large uk-margin">
<div uk-filter="target: .js-filter">
<div uk-grid>
    <div class="uk-width-small@m">

        <ul class="uk-nav uk-nav-default" uk-switcher="connect: #component-nav; animation: uk-animation-fade; toggle: > :not(.uk-nav-header)">
        <li class="uk-active" uk-filter-control><a href="#">All</a></li>
        <li uk-filter-control="[data-color='Alumital']"><a href="#">{{ trans('messages.Alumital') }}</a></li>
        <li uk-filter-control="[data-color='khachmonium']"><a href="#">{{ trans('messages.khachmonium') }}</a></li>
        <li uk-filter-control="[data-color='Acleric']"><a href="#">{{ trans('messages.Acleric') }}</a></li>
        <li uk-filter-control="[data-color='PVC']"><a href="#">{{ trans('messages.PVC') }}</a></li>
        <li uk-filter-control="[data-color='HPL']"><a href="#">{{ trans('messages.HPL') }}</a></li>
        <li uk-filter-control="[data-color='LAMIGLOSS']"><a href="#">{{ trans('messages.LAMIGLOSS') }}</a></li>
        <li uk-filter-control="[data-color='HighGloss']"><a href="#">{{ trans('messages.highgloss') }}</a></li>
        <li uk-filter-control="[data-color='powergloss']"><a href="#">{{ trans('messages.powergloss') }}</a></li>
        <li uk-filter-control="[data-color='polylac']"><a href="#">{{ trans('messages.polylac') }}</a></li>
        <li uk-filter-control="[data-color='----']"><a href="#">{{ trans('messages.-----') }}</a></li>
        </ul>

    </div>
    <div class="uk-width-expand@m">

        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>
        <li data-color="Alumital">
            <a class="uk-link-reset" href="#modal-full" uk-toggle>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="{!! asset('images/lg-appliances-package-awesome-like-sears-appliance-package-awesome-lg-kitchen-appliance-sets-buy-home-of-lg-appliances-package.jpg') !!}" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">kitchen devices</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
            </a>
        </li>
    </ul>
    </div>
</div>
</div>
</div>

</div>

<div id="modal-full" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
            <div class="uk-position-relative" uk-slideshow="animation: fade" uk-height-viewport>
        <ul class="uk-slideshow-items">
            <li>
                <img src="{!! asset('images/71mwlDgJpfL._SX679_.jpg') !!}" alt="" uk-cover>
            </li>
            <li>
                <img src="{!! asset('images/lg-appliances-package-awesome-like-sears-appliance-package-awesome-lg-kitchen-appliance-sets-buy-home-of-lg-appliances-package.jpg') !!}" alt="" uk-cover>
            </li>
            <li>
                <img src="{!! asset('images/Baskets_3.jpg') !!}" alt="" uk-cover>
            </li>
        </ul>

    <div class="uk-position-bottom-center uk-position-small">
        <ul class="uk-thumbnav">
            <li uk-slideshow-item="0"><a href="#"><img src="{!! asset('images/71mwlDgJpfL._SX679_.jpg') !!}" width="100" alt=""></a></li>
            <li uk-slideshow-item="1"><a href="#"><img src="{!! asset('images/lg-appliances-package-awesome-like-sears-appliance-package-awesome-lg-kitchen-appliance-sets-buy-home-of-lg-appliances-package.jpg') !!}" width="100" alt=""></a></li>
            <li uk-slideshow-item="2"><a href="#"><img src="{!! asset('images/Baskets_3.jpg') !!}"width="100" alt=""></a></li>
        </ul>
    </div>

</div>
            <div class="uk-padding-large">
                <h1>Headline</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>
@include('footer')