@include('header')
<div class="k  uk-padding  uk-overflow-auto">
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
        <li class="uk-active  " uk-filter-control><a style="color:black;"href="#">All</a></li>
        <li class="  " uk-filter-control="[data-color='Alumital']"><a style="color:black;"style="color:black;" href="#">{{ trans('messages.Alumital') }}</a></li>
        <li class="  " uk-filter-control="[data-color='khachmonium']"><a style="color:black;"href="#">{{ trans('messages.khachmonium') }}</a></li>
        <li class="  " uk-filter-control="[data-color='Acleric']"><a style="color:black;"href="#">{{ trans('messages.Acleric') }}</a></li>
        <li class=" " uk-filter-control="[data-color='PVC']"><a style="color:black;"href="#">{{ trans('messages.PVC') }}</a></li>
        <li class=" " uk-filter-control="[data-color='HPL']"><a style="color:black;"href="#">{{ trans('messages.HPL') }}</a></li>
        <li class=" " uk-filter-control="[data-color='LAMIGLOSS']"><a style="color:black;"href="#">{{ trans('messages.LAMIGLOSS') }}</a></li>
        <li class=" " uk-filter-control="[data-color='HighGloss']"><a style="color:black;"href="#">{{ trans('messages.highgloss') }}</a></li>
        <li class=" " uk-filter-control="[data-color='powergloss']"><a style="color:black;"href="#">{{ trans('messages.powergloss') }}</a></li>
        <li class=" " uk-filter-control="[data-color='polylac']"><a style="color:black;"href="#">{{ trans('messages.polylac') }}</a></li>
        <li class=" " uk-filter-control="[data-color='glading']"><a style="color:black;"href="#">{{ trans('messages.glading') }}</a></li>
        </ul>

    </div>
    <div class="uk-width-expand@m">

        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>
        <?php
       
        for($l=0;$l<$count1;$l++){
            if($date[$l]["type"]=="khachmonium" or $date[$l]["type"]=="خاشمنيوم"){
                $type= "khachmonium";
            }elseif($date[$l]["type"]=="Acleric" or $date[$l]["type"]=="اكلاريك"){
                $type= "Acleric";
            }elseif($date[$l]["type"]=="LAMIGLOSS" or $date[$l]["type"]=="لامي جلوس"){
                $type= "LAMIGLOSS";
            }elseif($date[$l]["type"]=="highgloss" or $date[$l]["type"]=="هاي جلوس"){
                $type= "HighGloss";
            }elseif($date[$l]["type"]=="powergloss" or $date[$l]["type"]=="باور جلوس"){
                $type= "powergloss";
            }elseif($date[$l]["type"]=="polylac" or $date[$l]["type"]=="بولي لاك"){
                $type= "polylac";
            }elseif($date[$l]["type"]=="kitchen PVC" or $date[$l]["type"]=="مطبخ الوميتال"){
                $type= "PVC";
            }elseif($date[$l]["type"]=="HPL" or $date[$l]["type"]=="HPL"){
                $type= "HPL";
            }elseif($date[$l]["type"]=="glading" or $date[$l]["type"]=="جلادنج"){
                $type= "glading";
            }
            else{
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
            <div class=" uk-padding uk-overflow-auto-large">
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








