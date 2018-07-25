
@include('header')

<header>
<div class="uk-position-relative uk-visible-toggle uk-light " uk-slideshow >

    <ul class="uk-slideshow-items uk-height-small" uk-height-viewport="min-height: 0" >
        <li>
            <img src="{!! asset('images/Window-Treatments-for-Sliding-Glass-Doors-1170x936.jpg') !!}" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light uk-overlay uk-overlay-primary">
                <h2 class="uk-margin-remove">{{ trans('messages.windows') }}</h2>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>        
        </li>
        <li>
            <img src="{!! asset('images/storage-dressing-room-6.jpg') !!}" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light uk-overlay uk-overlay-primary">
                <h2 class="uk-margin-remove">{{ trans('messages.dressing') }}</h2>
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
                <h2 class="uk-margin-remove">{{ trans('messages.libraries') }}</h2>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="{!! asset('images/haustuer.jpg') !!}" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light uk-overlay uk-overlay-primary">
                <h2 class="uk-margin-remove">{{ trans('messages.doors') }}</h2>
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
                <img src="{!! asset('images/ariston-built-in-gas-cooker-60-cm-4-burners-safety-cast-iron-stainless-ftghl-641-dixa-lpg.jpg') !!}" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">{{ trans('messages.kitechendevices') }}</h3>
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
                <h3 class="uk-card-title">{{ trans('messages.kitchenhood') }}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    
    <div class="uk-margin-left">
    <div class="uk-card uk-card-default uk-card-secondary">
            <div class="uk-inline uk-card-media-top ">
                <img class="uk-height-small" src="{!! asset('images/Baskets_3.jpg') !!}" alt="">
                <p>{{ trans('messages.accessories') }}</p>
            
            </div>
    </div>
    <div class="uk-card uk-card-default uk-card-secondary">
            <div class="uk-card-media-top uk-inline">
                <img class="uk-height-small" src="{!! asset('images/R3HP.jpg') !!}" alt="">
                <p>{{ trans('messages.accessories') }}</p>
            </div>
    </div>
    </div>
</div>
</div>
<div id="vision"class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top uk-margin-top " style="background-image: url({!! asset('images/picture-of-modern-kitchen-design-dark-grey-floor-tiles-lovely.jpg') !!});">
    <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical uk-light uk-overlay uk-overlay-primary" style="height:100%; width:100%">
        <h1 uk-parallax="opacity: 0,1,1; y: -100,0,0; x: 100,100,0; scale: 2,1,1; viewport: 0.5;" style="margin-top:10%" >{{ trans('messages.About') }}</h1>
        <p uk-parallax="opacity: 0,1,1; y: 100,0,0; x: -100,-100,0; scale: 0.5,1,1; viewport: 0.5;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    </div>
</div>

<div class="uk-position-relative uk-visible-toggle uk-light" uk-slider="clsActivated: uk-transition-active; center: true">

    <ul class="uk-slider-items uk-grid">
        <li class="uk-width-3-4">
            <div class="uk-panel">
                <img src="images/8.jpg" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">Bottom</h3>
                    <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </li>
        <li class="uk-width-3-4">
            <div class="uk-panel">
                <img src="images/8.jpg" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">Bottom</h3>
                    <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </li>
        <li class="uk-width-3-4">
            <div class="uk-panel">
                <img src="images/8.jpg" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">Bottom</h3>
                    <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </li>
        <li class="uk-width-3-4">
            <div class="uk-panel">
                <img src="images/uk-pfs-ha-UK_PFS_HA_5J.jpg" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">Bottom</h3>
                    <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </li>
        <li class="uk-width-3-4">
            <div class="uk-panel">
                <img src="images/8.jpg" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">Bottom</h3>
                    <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </li>
        <li class="uk-width-3-4">
            <div class="uk-panel">
                <img src="images/uk-pfs-ha-UK_PFS_HA_5J.jpg" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">Bottom</h3>
                    <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </li>
        <li class="uk-width-3-4">
            <div class="uk-panel">
                <img src="images/uk-pfs-ha-UK_PFS_HA_5J.jpg" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">Bottom</h3>
                    <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

<div class="uk-background-secondary ">

<div class="uk-panel uk-container uk-container-small uk-padding uk-light"id="contact">
    <img class="uk-align-left uk-margin-remove-adjacent" src="{!! asset('images/b89b646324623c4c10ba7644e16a233a--white-kitchen-modern-modern-kitchens.jpg') !!}" width="225" height"150" alt="Example image">
    <dl class="uk-description-list uk-description-list-divider uk-light">
    <h3 style="color:white" class="uk-align-center">{{ trans('messages.contact') }}</h3>
    <dt style="color:white">{{ trans('messages.companyaddress') }}</dt>
    <dd>50 Abdelrehem street, Elshaqia</dd>
    <dd>Z-226563</dd>
    <dt style="color:white">{{ trans('messages.email') }}</dt>
    <dd>youremail@yourdomain.com </dd>
    <dd>@YourTwitterAccount</dd>
    <dt style="color:white">{{ trans('messages.phone') }}</dt>
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
 