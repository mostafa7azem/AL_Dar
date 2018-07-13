
@include('header')



<form action="insert" method="post">
        <div class="uk-margin">
            <input class="uk-input" type="text"    name"name" placeholder="Input">
        </div>

        <div class="uk-margin" >
            <select class="uk-select" name="type">
                <option>Option 01</option>
                <option>Option 02</option>
            </select>
        </div>

        <div class="uk-margin">
            <textarea class="uk-textarea" name="discreption" rows="5" placeholder="Textarea"></textarea>
        </div>
        {{csrf_field()}}
    <input class="uk-button uk-button-default" type="supmit" name="supmit" value="supmit">
</form>

@foreach($data as $value){
    @print_r($value);
@endforeach

@include('footer')

