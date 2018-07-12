
@include('header')
<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-center">

        <div class="uk-navbar-center-left"><div>
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#">About</a></li>
                <li>
                    <a href="#">typs</a>
                    <div class="uk-navbar-dropdown">
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
        <div class="uk-navbar-center-right"><div>
            <ul class="uk-navbar-nav">
                <li><a href="#">contact</a></li>
            </ul>
        </div></div>

    </div>
</nav>
<div class="uk-container uk-container-expand">
<div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow>

    <ul class="uk-slideshow-items">
        <li>
            <img src="{!! asset('images/haustuer.jpg') !!}" alt="" uk-cover>
        </li>
        <li>
            <img src="{!! asset('images/haustuer.jpg') !!}" alt="" uk-cover>
        </li>
        <li>
            <img src="{!! asset('images/haustuer.jpg') !!}" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
</div>
@include('footer')
 