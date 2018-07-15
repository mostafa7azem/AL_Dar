
@include('header')


<div class="uk-container uk-container-small">

<form class="uk-form-horizontal uk-margin-large" action="/upload" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="uk-margin">
    <label class="uk-form-label" for="form-horizontal-text">Name</label>
    <div class="uk-form-controls">
        <input class="uk-input" id="form-horizontal-text" type="text" name="name" placeholder="name...">
    </div>
</div>



<div class="uk-margin">
    <label class="uk-form-label" for="form-horizontal-select">Description</label>
    <div class="uk-form-controls">
    <textarea class="uk-textarea" name="description" rows="5" placeholder="some thing ..."></textarea>
    </div>
</div>

<div class="uk-margin">
    <label class="uk-form-label" for="form-horizontal-select">Type</label>
    <div class="uk-form-controls">
        <select class="uk-select" id="form-horizontal-select" name="type">
        
        <option>{{ trans('messages.Bathroomsector') }}</option>
        <option>{{ trans('messages.builtindevices') }}</option>
        <option>{{ trans('messages.doorswindows Alumital') }}</option>
        <option>{{ trans('messages.doorswindows PVC') }}</option>
        <option>{{ trans('messages.dressingroom') }}</option>
        <option>{{ trans('messages.kitchenhood') }}</option>
        <option>{{ trans('messages.liberary') }}</option>
        <option>{{ trans('messages.moderntables') }}</option>
        <option>{{ trans('messages.tanda') }}</option>
            <option>{{ trans('messages.kitchen Alumital') }}</option>
            <option>{{ trans('messages.khachmonium') }}</option>
            <option>{{ trans('messages.Acleric') }}</option>
            <option>{{ trans('messages.kitchen PVC') }}</option>
            <option>{{ trans('messages.HPL') }}</option>
            <option>{{ trans('messages.LAMIGLOSS') }}</option>
            <option>{{ trans('messages.highgloss') }}</option>
            <option>{{ trans('messages.powergloss') }}</option>
            <option>{{ trans('messages.polylac') }}</option>
            <option>{{ trans('messages.-----') }}</option>

        </select>
    </div>

    <div class="uk-margin">
    <label class="uk-form-label" for="form-horizontal-select">Images</label>
        <div uk-form-custom>
            <input type="file" type="file" name="photos[]" multiple >
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
        </div>
    </div>
</div>
<div class="uk-margin">
 <input class="uk-button uk-button-secondary uk-width-1-1" type="submit" value="Add">
 </div>
</form>
</div>


@include('footer')

