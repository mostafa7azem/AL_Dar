<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        .bg{
            height: 100vh;
            background: url("{!! asset('images/bathroomtrend2.jpg') !!}") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .k{
            height: 100vh;
            background: url("{!! asset('images/8a4cafb5d3f8bbeb3b089710e785c148f23a303c-310318213957.jpg') !!}") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .dw{
            height: 100vh;
            background: url("{!! asset('images/windows-doors-los-angeles.jpg') !!}") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .bi{
            height: 100vh;
            background: url("{!! asset('images/uk-pfs-ha-UK_PFS_HA_5J.jpg') !!}") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .dr{
            height: 100vh;
            background: url("{!! asset('images/20160222-4885-storage_dressing_14.jpg') !!}") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }.kh{
            height: 100vh;
            background: url("{!! asset('images/omega-kitchen-hoods-04.jpg') !!}") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }.li{
            height: 100vh;
            background: url("{!! asset('images/modern-homes-interior-home-library-office-design.jpg') !!}") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }.tn{
            height: 100vh;
            background: url("{!! asset('images/8.jpg') !!}") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }.mo{
            height: 100vh;
            background: url("{!! asset('images/Add-Unique-Oak-Coffee-Table-with-Storage-and-Glass-Top-on-Grey-Carpet-Rug-near-Wooden-Cabinet.jpg') !!}") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        </style>
        <title>EL DAR</title>
        <link rel="stylesheet" href="{!! asset('css/uikit.min.css') !!}" />

      
    </head>
    <body>
    <nav class=" uk-background-secondary" uk-navbar>
    <div class="uk-navbar-center uk-light uk-background-secondary">

        <div class="uk-navbar-center-left uk-light uk-background-secondary"><div>
            <ul class="uk-navbar-nav">
                <li ><a href="/#vision">{{ trans('messages.About') }}</a></li>
                <li>
                    <a href="#">{{ trans('messages.purchases') }}</a>
                    <div class="uk-navbar-dropdown uk-light uk-background-secondary">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="/doorsandwindows">{{ trans('messages.doorswindows') }}</a></li>
                            <li><a href="/kitchen">{{ trans('messages.kitchens') }}</a></li>
                            <li><a href="/tnd">{{ trans('messages.tanda') }}</a></li>
                            <li><a href="/libraries">{{ trans('messages.liberary') }}</a></li>
                            <li><a href="/kitchenhoods">{{ trans('messages.kitchenhood') }}</a></li>
                            <li><a href="/dressingrooms">{{ trans('messages.dressing') }}</a></li>
                            <li><a href="/Bathroomsector">{{ trans('messages.Bathroomsector') }}</a></li>
                            <li><a href="/moderntables">{{ trans('messages.moderntables') }}</a></li>
                            <li><a href="/builtindevices">{{ trans('messages.builtindevices') }}</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div></div>
        <a class="uk-navbar-item uk-logo " href="/"><img src="{!! asset('images/36981931_1853667418012394_8883674462004707328_n.jpg') !!}" style="max-height:80px"></a>
        <div class="uk-navbar-center-right uk-light uk-background-secondary"><div>
            <ul class="uk-navbar-nav">
                <li><a href="/#contact">{{ trans('messages.contact') }}</a></li>
                <?php
                $value = session('login');
                if($value=="admin"){?><li><a>
                    <form action="/logout" method="post">
                        {{csrf_field()}}

                    <input type="submit" value="LOGOUT"></form>
                </a></li>
                <li><a href="/upload">{{ trans('messages.add') }}</a></li>
                
                <?php
                    
                }
                if($value!="admin"){
                    echo'<li><a href="#modal-sections" uk-toggle>'.__('messages.login').'</a></li>';
                }
                ?>
                <li><a>
                    <form action="/language" method="post">
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
<div id="modal-sections" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">{{ trans('messages.login') }}</h2>
        </div>
        <div class="uk-modal-body">
        <form class="uk-panel uk-panel-box uk-form" action="/loginme" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large uk-margin-top" name="password" type="password" placeholder="Password">
                    </div>
                    <button class="uk-button uk-button-primary uk-margin-top uk-margin-left" type="submit" name="login" value="Login">{{ trans('messages.login') }}</button>
                </form>
        </div>
        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
           
        </div>
    </div>
</div>