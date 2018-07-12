@include('header')
<nav class=" uk-background-secondary" uk-navbar>
    <div class="uk-navbar-center uk-light uk-background-secondary">

        <div class="uk-navbar-center-left uk-light uk-background-secondary"><div>
            <ul class="uk-navbar-nav">
                <li ><a href="#">About</a></li>
                <li>
                    <a href="#">modern</a>
                    <div class="uk-navbar-dropdown uk-light uk-background-secondary">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">door & window</a></li>
                            <li><a href="#">kitchen</a></li>
                            <li><a href="#">Tanda</a></li>
                            <li><a href="#">library</a></li>
                            <li><a href="#">Kitchen Hoods</a></li>
                            <li><a href="#">Dressing Room</a></li>
                            <li><a href="#">Bathroom sector</a></li>
                            <li><a href="#">Modern tables</a></li>
                            <li><a href="#">BUilt IN devices</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div></div>
        <a class="uk-navbar-item uk-logo " href="#">ElDar</a>
        <div class="uk-navbar-center-right uk-light uk-background-secondary"><div>
            <ul class="uk-navbar-nav">
                <li><a href="#">contact</a></li>
                <li><a href="#">login</a></li>
                <li><a>
                    <form action="language" method="post">
                        <select name="locale">
                          <option value="ar">ar</option>
                          <option value="en">en</option>
                        </select>
                        {{csrf_field()}}
                    <input type="submit" value="Submit"></form>
                    {{ trans('messages.welcome') }}
                </a></li>
            </ul>
        
        </div>
        
        </div>

    </div>
</nav>

<div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">

        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <li class="uk-active"><a href="#">Active</a></li>
            <li class="uk-parent">
                <a href="#">Parent</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
        </ul>

    </div>
</div>


@include('footer')