@component('core::admin._buttons-form', ['model' => $model, 'langSwitcher' => false])
@endcomponent

{!! BootForm::hidden('id') !!}

<div class="row gx-3">
    <div class="col-md-6">
        {!! BootForm::text(__('Tag'), 'tag')->required() !!}
    </div>
    <div class="col-md-6 mb-3 @if ($errors->has('slug'))has-error @endif">
        {!! Form::label(__('Slug'))->addClass('form-label')->forId('slug') !!}
        <div class="input-group">
            {!! Form::text('slug')->addClass('form-control')->addClass($errors->has('slug') ? 'is-invalid' : '')->id('slug')->data('slug', 'tag') !!}
            <button class="btn btn-outline-secondary btn-slug @if ($errors->has('slug'))btn-danger @endif" type="button">{{ __('Generate') }}</button>
            {!! $errors->first('slug', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>