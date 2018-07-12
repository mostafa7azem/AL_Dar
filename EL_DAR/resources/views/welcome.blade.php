
@include('header')
<nav class="uk-navbar-container uk-background-secondary" uk-navbar>
    <div class="uk-navbar-center uk-light uk-background-secondary">

        <div class="uk-navbar-center-left uk-light uk-background-secondary"><div>
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#">About</a></li>
                <li>
                    <a href="#">typs</a>
                    <div class="uk-navbar-dropdown uk-light uk-background-secondary">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div></div>
        <a class="uk-navbar-item uk-logo" href="#">ElDar</a>
        <div class="uk-navbar-center-right uk-light uk-background-secondary"><div>
            <ul class="uk-navbar-nav">
                <li><a href="#">contact</a></li>
            </ul>
        </div></div>

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
                <h2 class="uk-margin-remove">Kitchen</h2>
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
<div class="uk-container uk-container-small">
<div class="uk-child-width-expand@s uk-text-center " uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
</div>
</div>
@include('footer')
 