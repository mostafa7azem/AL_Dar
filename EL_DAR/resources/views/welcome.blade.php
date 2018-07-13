
@include('header')
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
<header>
<div class="uk-position-relative uk-visible-toggle uk-light " uk-slideshow >

    <ul class="uk-slideshow-items uk-height-small" uk-height-viewport="min-height: 0" >
        <li>
            <img src="{!! asset('images/Window-Treatments-for-Sliding-Glass-Doors-1170x936.jpg') !!}" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light uk-overlay uk-overlay-primary">
                <h2 class="uk-margin-remove">Window</h2>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>        
        </li>
        <li>
            <img src="{!! asset('images/storage-dressing-room-6.jpg') !!}" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light uk-overlay uk-overlay-primary">
                <h2 class="uk-margin-remove">Dressing Room</h2>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="{!! asset('images/kk.jpg') !!}" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light uk-overlay uk-overlay-primary">
                <h2 class="uk-margin-remove">{{ trans('messages.kitchens') }}</h2>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="{!! asset('images/create_home_library_03.jpg') !!}" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light uk-overlay uk-overlay-primary">
                <h2 class="uk-margin-remove">Librare</h2>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="{!! asset('images/haustuer.jpg') !!}" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light uk-overlay uk-overlay-primary">
                <h2 class="uk-margin-remove">Door</h2>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>


</div>
</header>
<div class="uk-container uk-container-small uk-margin-top">
<div class="uk-child-width-expand@s uk-text-center " uk-grid>
    <div>
    <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="{!! asset('images/lg-appliances-package-awesome-like-sears-appliance-package-awesome-lg-kitchen-appliance-sets-buy-home-of-lg-appliances-package.jpg') !!}" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">kitchen devices</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <div>
    <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="{!! asset('images/71mwlDgJpfL._SX679_.jpg') !!}" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Kitchen Hood</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    
    <div class="uk-margin-left">
    <div class="uk-card uk-card-default uk-card-secondary">
            <div class="uk-inline uk-card-media-top ">
                <img class="uk-height-small" src="{!! asset('images/Baskets_3.jpg') !!}" alt="">
                <p>Default Lorem ipsum</p>
            
            </div>
    </div>
    <div class="uk-card uk-card-default uk-card-secondary">
            <div class="uk-card-media-top uk-inline">
                <img class="uk-height-small" src="{!! asset('images/R3HP.jpg') !!}" alt="">
                <p>Media Top</p>
            </div>
    </div>
    </div>
</div>
</div>
<div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top uk-margin-top " style="background-image: url({!! asset('images/picture-of-modern-kitchen-design-dark-grey-floor-tiles-lovely.jpg') !!});">
    <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical uk-light uk-overlay uk-overlay-primary" style="height:100%; width:100%">
        <h1 uk-parallax="opacity: 0,1,1; y: -100,0,0; x: 100,100,0; scale: 2,1,1; viewport: 0.5;" style="margin-top:10%">Our vision</h1>
        <p uk-parallax="opacity: 0,1,1; y: 100,0,0; x: -100,-100,0; scale: 0.5,1,1; viewport: 0.5;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    </div>
</div>



<div class="uk-background-secondary ">

<div class="uk-panel uk-container uk-container-small uk-padding uk-light">
    <img class="uk-align-left uk-margin-remove-adjacent" src="{!! asset('images/b89b646324623c4c10ba7644e16a233a--white-kitchen-modern-modern-kitchens.jpg') !!}" width="225" height"150" alt="Example image">
    <dl class="uk-description-list uk-description-list-divider uk-light">
    <h3 style="color:white" class="uk-align-center">Contact Details</h3>
    <dt style="color:white">Company Name</dt>
    <dd>50 Abdelrehem street, Elshaqia</dd>
    <dd>Z-226563</dd>
    <dt style="color:white">E-mail</dt>
    <dd>youremail@yourdomain.com </dd>
    <dd>@YourTwitterAccount</dd>
    <dt style="color:white">Phone</dt>
    <dd>P+44 (0) 208 0000 000</dd>
    <dd>+02 01555555258</dd>
</dl>
</div>
</div>
<footer class="uk-text-center uk-background-secondary ">
    
<a href="" class="uk-icon-button uk-margin-small-right " uk-icon="twitter"></a>
<a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
<a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="whatsapp"></a>
<a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="instagram"></a>
<a href="" class="uk-icon-button uk-margin-small-right" uk-icon="google-plus"></a>
<a href="" class="uk-icon-button uk-margin-larg-right"  uk-icon="chevron-up" uk-scroll></a>
<p>© 2018 Agente</p>
</footer>    

@include('footer')
 