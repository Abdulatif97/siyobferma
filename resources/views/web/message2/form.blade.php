<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('create_person_id') }}
            {{ Form::text('create_person_id', $message->create_person_id, ['class' => 'form-control' . ($errors->has('create_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Create Person Id']) }}
            {!! $errors->first('create_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_person_id') }}
            {{ Form::text('updated_person_id', $message->updated_person_id, ['class' => 'form-control' . ($errors->has('updated_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Updated Person Id']) }}
            {!! $errors->first('updated_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted') }}
            {{ Form::text('deleted', $message->deleted, ['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => 'Deleted']) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reporting_person_name') }}
            {{ Form::text('reporting_person_name', $message->reporting_person_name, ['class' => 'form-control' . ($errors->has('reporting_person_name') ? ' is-invalid' : ''), 'placeholder' => 'Reporting Person Name']) }}
            {!! $errors->first('reporting_person_name', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reporting_person_phone_number') }}
            {{ Form::text('reporting_person_phone_number', $message->reporting_person_phone_number, ['class' => 'form-control' . ($errors->has('reporting_person_phone_number') ? ' is-invalid' : ''), 'placeholder' => 'Reporting Person Phone Number']) }}
            {!! $errors->first('reporting_person_phone_number', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_category_id') }}
            {{ Form::text('item_category_id', $message->item_category_id, ['class' => 'form-control' . ($errors->has('item_category_id') ? ' is-invalid' : ''), 'placeholder' => 'Item Category Id']) }}
            {!! $errors->first('item_category_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_id') }}
            {{ Form::text('item_id', $message->item_id, ['class' => 'form-control' . ($errors->has('item_id') ? ' is-invalid' : ''), 'placeholder' => 'Item Id']) }}
            {!! $errors->first('item_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_condition') }}
            {{ Form::text('item_condition', $message->item_condition, ['class' => 'form-control' . ($errors->has('item_condition') ? ' is-invalid' : ''), 'placeholder' => 'Item Condition']) }}
            {!! $errors->first('item_condition', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_address_soato_id') }}
            {{ Form::text('item_address_soato_id', $message->item_address_soato_id, ['class' => 'form-control' . ($errors->has('item_address_soato_id') ? ' is-invalid' : ''), 'placeholder' => 'Item Address Soato Id']) }}
            {!! $errors->first('item_address_soato_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_address_additional') }}
            {{ Form::text('item_address_additional', $message->item_address_additional, ['class' => 'form-control' . ($errors->has('item_address_additional') ? ' is-invalid' : ''), 'placeholder' => 'Item Address Additional']) }}
            {!! $errors->first('item_address_additional', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_address_latitude') }}
            {{ Form::text('item_address_latitude', $message->item_address_latitude, ['class' => 'form-control' . ($errors->has('item_address_latitude') ? ' is-invalid' : ''), 'placeholder' => 'Item Address Latitude']) }}
            {!! $errors->first('item_address_latitude', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_address_longitude') }}
            {{ Form::text('item_address_longitude', $message->item_address_longitude, ['class' => 'form-control' . ($errors->has('item_address_longitude') ? ' is-invalid' : ''), 'placeholder' => 'Item Address Longitude']) }}
            {!! $errors->first('item_address_longitude', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('attached_photos') }}
            {{ Form::text('attached_photos', $message->attached_photos, ['class' => 'form-control' . ($errors->has('attached_photos') ? ' is-invalid' : ''), 'placeholder' => 'Attached Photos']) }}
            {!! $errors->first('attached_photos', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reporting_date') }}
            {{ Form::text('reporting_date', $message->reporting_date, ['class' => 'form-control' . ($errors->has('reporting_date') ? ' is-invalid' : ''), 'placeholder' => 'Reporting Date']) }}
            {!! $errors->first('reporting_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_approved') }}
            {{ Form::text('is_approved', $message->is_approved, ['class' => 'form-control' . ($errors->has('is_approved') ? ' is-invalid' : ''), 'placeholder' => 'Is Approved']) }}
            {!! $errors->first('is_approved', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('approved_person_id') }}
            {{ Form::text('approved_person_id', $message->approved_person_id, ['class' => 'form-control' . ($errors->has('approved_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Approved Person Id']) }}
            {!! $errors->first('approved_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $message->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>