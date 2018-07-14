<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EL DAR</title>
        <link rel="stylesheet" href="{!! asset('css/uikit.min.css') !!}" />

      
    </head>
    <body>
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
                            <li><a href="#">{{ trans('messages.dressing') }}</a></li>
                            <li><a href="#">{{ trans('messages.Bathroomsector') }}</a></li>
                            <li><a href="#">{{ trans('messages.moderntables') }}</a></li>
                            <li><a href="#">{{ trans('messages.builtindevices') }}</a></li>
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