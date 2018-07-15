@include('header')
<div class="dw uk-padding">
<?php
if(isset($data)){
$date = json_decode(json_encode($data),true);

$count =0;
foreach($date as $one){
    foreach($one as $item){
        if(is_array($item)){
            break;
        }else{ 
            $count++;
        }
        break;
    }
}

$count1 = $count;
?>
<div class="uk-container uk-container-large uk-margin">
<div uk-filter="target: .js-filter">
<div uk-grid>
    <div class="uk-width-small@m">

        <ul class="uk-nav uk-nav-default" uk-switcher="connect: #component-nav; animation: uk-animation-fade; toggle: > :not(.uk-nav-header)">
        <li class="uk-active uk-text-large" uk-filter-control><a style="color:black;"href="#">All</a></li>
        <li  class="uk-text-large" uk-filter-control="[data-color='Alumital']"><a style="color:black;"href="#">{{ trans('messages.Alumital') }}</a></li>
        <li class="uk-text-large"  uk-filter-control="[data-color='PVC']"><a style="color:black;"href="#">{{ trans('messages.PVC') }}</a></li>
        </ul>

    </div>
    <div class="uk-width-expand@m">

        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>
        <?php
        for($l=0;$l<$count1;$l++){
            if($date[$l]["type"]=="doorswindows PVC" or $date[$l]["type"]=="ابواب و شبابيك PVC"){
                $type= "PVC";
            }else{
                $type= "Alumital";
            }
    
        ?>
        <li data-color="<?php echo $type;?>">

            <a style="color:black;"class="uk-link-reset" href="#<?php echo "momo".$date[$l]["id"];?>" uk-toggle>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top ">
                <img class="uk-height-medium" src="<?php echo "storage/".$date[$count][0]["filename"];?>" alt="" >
            </div>
            <div class="uk-card-body ">
                <h3 class="uk-card-title"><?php echo $date[$l]["name"];?></h3>
                <p><?php echo $date[$l]["description"];?></p>
                
            </div>
        </div>
            </a>
            <?php
                $value = session('login');
                if($value=="admin"){?>
                    <form action="/delet" method="post">
                        {{ csrf_field() }}
                    <input type="hidden" name="lolo" value="<?php echo $date[$l]["id"];?>" >
                    <input type="submit" value="delete" >
                    </form>   
                <?php    
                }
                ?>
        </li>
        <div id="<?php echo "momo".$date[$l]["id"];?>" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
            <div class="uk-position-relative" uk-slideshow="animation: fade" uk-height-viewport>
        <ul class="uk-slideshow-items">
                <?php
                    foreach($date[$count] as $imag){

                    
                ?>
            <li>
                <img class="uk-height-large uk-position-center" src="<?php echo "storage/".$imag["filename"];?>" alt="" uk-img>
            </li>
            <?php
               }
            ?>
        </ul>

    <div class="uk-position-bottom-center uk-position-small">
        <ul class="uk-thumbnav">
        <?php
        $co =0;
                    foreach($date[$count] as $imag){

                    
                ?>
            <li uk-slideshow-item="<?php echo $co; ?>"><a style="color:black;"href="#"><img src="<?php echo "storage/".$imag["filename"];?>" width="100" alt=""></a></li>
            <?php
            $co++;
            }
            $count++;
            ?>
        </ul>
    </div>

</div>
            <div class="uk-padding-large">
                <h1><?php echo $date[$l]["name"];?></h1>
                <p> <?php echo $date[$l]["description"];?>.</p>
            </div>
        </div>
    </div>
</div>
        <?php
        }
        ?>
    </ul>
    </div>
</div>
</div>
</div>

</div>

<?php
}
?>
</div>
@include('footer')




