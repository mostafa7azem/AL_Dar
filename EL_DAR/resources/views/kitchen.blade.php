@include('header')
<div class="uk-offcanvas-content">
<nav class=" uk-background-secondary" uk-navbar>
    <div class="uk-navbar-center uk-light uk-background-secondary">

        <div class="uk-navbar-center-left uk-light uk-background-secondary"><div>
            <ul class="uk-navbar-nav">
                <li ><a href="#">{{ trans('messages.About') }}</a></li>
                <li>
                    <a href="#">{{ trans('messages.purchases') }}</a>
                    <div class="uk-navbar-dropdown uk-light uk-background-secondary">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">{{ trans('messages.doorswindows') }}</a></li>
                            <li><a href="#">{{ trans('messages.kitchens') }}</a></li>
                            <li><a href="#">{{ trans('messages.tanda') }}</a></li>
                            <li><a href="#">{{ trans('messages.liberary') }}</a></li>
                            <li><a href="#">{{ trans('messages.kitchenhood') }}</a></li>
                            <li><a href="#">Dressing Room</a></li>
                            <li><a href="#">Bathroom sector</a></li>
                            <li><a href="#">Modern tables</a></li>
                            <li><a href="#">BUilt IN devices</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div></div>
        <a class="uk-navbar-item uk-logo " href="#"><img src="{!! asset('images/36981931_1853667418012394_8883674462004707328_n.jpg') !!}" style="max-height:80px"></a>
        <div class="uk-navbar-center-right uk-light uk-background-secondary"><div>
            <ul class="uk-navbar-nav">
                <li><a href="#">{{ trans('messages.contact') }}</a></li>
                <li><a href="#">{{ trans('messages.login') }}</a></li>
                <li><a>
                    <form action="language" method="post">
                        <select name="locale">
                          <option value="ar" >ar</option>
                          <option value="en">en</option>
                        </select>
                        {{csrf_field()}}
                    <input type="submit" value="Submit"></form>
                </a></li>
            </ul>
        
        </div>
        
        </div>

    </div>
</nav>
<div class="uk-container uk-container-large uk-margin">
<div uk-filter="target: .js-filter">
<div uk-grid>
    <div class="uk-width-small@m">

        <ul class="uk-nav uk-nav-default" uk-switcher="connect: #component-nav; animation: uk-animation-fade; toggle: > :not(.uk-nav-header)">
        <li class="uk-active" uk-filter-control><a href="#">All</a></li>
        <li uk-filter-control="[data-color='white']"><a href="#">White</a></li>
        <li uk-filter-control="[data-color='blue']"><a href="#">Blue</a></li>
        <li uk-filter-control="[data-color='black']"><a href="#">Black</a></li>
        </ul>

    </div>
    <div class="uk-width-expand@m">

        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>
        <li data-color="white">
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
        <li data-color="blue">
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="{!! asset('images/71mwlDgJpfL._SX679_.jpg') !!}" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Kitchen Hood</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
        </li>
        <li data-color="white">
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="{!! asset('images/lg-appliances-package-awesome-like-sears-appliance-package-awesome-lg-kitchen-appliance-sets-buy-home-of-lg-appliances-package.jpg') !!}" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">kitchen devices</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
        </li>
        <li data-color="white">
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="{!! asset('images/lg-appliances-package-awesome-like-sears-appliance-package-awesome-lg-kitchen-appliance-sets-buy-home-of-lg-appliances-package.jpg') !!}" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">kitchen devices</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
        </li>
        <li data-color="black">
        <div class="uk-card uk-card-default uk-card-secondary">
            <div class="uk-inline uk-card-media-top ">
                <img class="uk-height-small" src="{!! asset('images/Baskets_3.jpg') !!}" alt="">
                <p>Default Lorem ipsum</p>
            
            </div>
    </div>
        </li>
        <li data-color="black">
        <div class="uk-card uk-card-default uk-card-secondary">
            <div class="uk-inline uk-card-media-top ">
                <img class="uk-height-small" src="{!! asset('images/Baskets_3.jpg') !!}" alt="">
                <p>Default Lorem ipsum</p>
            
            </div>
    </div>
        </li>
        <li data-color="blue">
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="{!! asset('images/71mwlDgJpfL._SX679_.jpg') !!}" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Kitchen Hood</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
        </li>
        <li data-color="black">
        <div class="uk-card uk-card-default uk-card-secondary">
            <div class="uk-inline uk-card-media-top ">
                <img class="uk-height-small" src="{!! asset('images/Baskets_3.jpg') !!}" alt="">
                <p>Default Lorem ipsum</p>
            
            </div>
    </div>
        </li>
        <li data-color="blue">
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="{!! asset('images/71mwlDgJpfL._SX679_.jpg') !!}" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Kitchen Hood</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
        </li>
        <li data-color="white">
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="{!! asset('images/lg-appliances-package-awesome-like-sears-appliance-package-awesome-lg-kitchen-appliance-sets-buy-home-of-lg-appliances-package.jpg') !!}" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">kitchen devices</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
        </li>
        <li data-color="blue">
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="{!! asset('images/71mwlDgJpfL._SX679_.jpg') !!}" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Kitchen Hood</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
        </li>
        <li data-color="black">
        <div class="uk-card uk-card-default uk-card-secondary">
            <div class="uk-inline uk-card-media-top ">
                <img class="uk-height-small" src="{!! asset('images/Baskets_3.jpg') !!}" alt="">
                <p>Default Lorem ipsum</p>
            
            </div>
    </div>
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