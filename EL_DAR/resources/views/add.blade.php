
@include('header')



<form action="/insert" method="post">
        
            <input class="uk-input" type="text"    name="name" placeholder="Input">
 
            <textarea class="uk-textarea" name="discreption" rows="5" placeholder="Textarea"></textarea>
        {{csrf_field()}}
    <input  type="submit" name="submit" value="submit">
</form>

@foreach($data as $value)
    {{ $value->obj_name }}
@endforeach

@include('footer')

