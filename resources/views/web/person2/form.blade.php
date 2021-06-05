<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('create_person_id') }}
            {{ Form::text('create_person_id', $person->create_person_id, ['class' => 'form-control' . ($errors->has('create_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Create Person Id']) }}
            {!! $errors->first('create_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_person_id') }}
            {{ Form::text('updated_person_id', $person->updated_person_id, ['class' => 'form-control' . ($errors->has('updated_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Updated Person Id']) }}
            {!! $errors->first('updated_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted') }}
            {{ Form::text('deleted', $person->deleted, ['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => 'Deleted']) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pinfl') }}
            {{ Form::text('pinfl', $person->pinfl, ['class' => 'form-control' . ($errors->has('pinfl') ? ' is-invalid' : ''), 'placeholder' => 'Pinfl']) }}
            {!! $errors->first('pinfl', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_card_number') }}
            {{ Form::text('id_card_number', $person->id_card_number, ['class' => 'form-control' . ($errors->has('id_card_number') ? ' is-invalid' : ''), 'placeholder' => 'Id Card Number']) }}
            {!! $errors->first('id_card_number', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('passport_series') }}
            {{ Form::text('passport_series', $person->passport_series, ['class' => 'form-control' . ($errors->has('passport_series') ? ' is-invalid' : ''), 'placeholder' => 'Passport Series']) }}
            {!! $errors->first('passport_series', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('passport_number') }}
            {{ Form::text('passport_number', $person->passport_number, ['class' => 'form-control' . ($errors->has('passport_number') ? ' is-invalid' : ''), 'placeholder' => 'Passport Number']) }}
            {!! $errors->first('passport_number', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('given_name') }}
            {{ Form::text('given_name', $person->given_name, ['class' => 'form-control' . ($errors->has('given_name') ? ' is-invalid' : ''), 'placeholder' => 'Given Name']) }}
            {!! $errors->first('given_name', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('surname') }}
            {{ Form::text('surname', $person->surname, ['class' => 'form-control' . ($errors->has('surname') ? ' is-invalid' : ''), 'placeholder' => 'Surname']) }}
            {!! $errors->first('surname', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fathers_name') }}
            {{ Form::text('fathers_name', $person->fathers_name, ['class' => 'form-control' . ($errors->has('fathers_name') ? ' is-invalid' : ''), 'placeholder' => 'Fathers Name']) }}
            {!! $errors->first('fathers_name', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('actual_address_soato_id') }}
            {{ Form::text('actual_address_soato_id', $person->actual_address_soato_id, ['class' => 'form-control' . ($errors->has('actual_address_soato_id') ? ' is-invalid' : ''), 'placeholder' => 'Actual Address Soato Id']) }}
            {!! $errors->first('actual_address_soato_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('actual_address_additional') }}
            {{ Form::text('actual_address_additional', $person->actual_address_additional, ['class' => 'form-control' . ($errors->has('actual_address_additional') ? ' is-invalid' : ''), 'placeholder' => 'Actual Address Additional']) }}
            {!! $errors->first('actual_address_additional', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('temporary_address_soato_id') }}
            {{ Form::text('temporary_address_soato_id', $person->temporary_address_soato_id, ['class' => 'form-control' . ($errors->has('temporary_address_soato_id') ? ' is-invalid' : ''), 'placeholder' => 'Temporary Address Soato Id']) }}
            {!! $errors->first('temporary_address_soato_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('temporary_address_additional') }}
            {{ Form::text('temporary_address_additional', $person->temporary_address_additional, ['class' => 'form-control' . ($errors->has('temporary_address_additional') ? ' is-invalid' : ''), 'placeholder' => 'Temporary Address Additional']) }}
            {!! $errors->first('temporary_address_additional', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email_address') }}
            {{ Form::text('email_address', $person->email_address, ['class' => 'form-control' . ($errors->has('email_address') ? ' is-invalid' : ''), 'placeholder' => 'Email Address']) }}
            {!! $errors->first('email_address', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone_number') }}
            {{ Form::text('phone_number', $person->phone_number, ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => 'Phone Number']) }}
            {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state_of_activity_status') }}
            {{ Form::text('state_of_activity_status', $person->state_of_activity_status, ['class' => 'form-control' . ($errors->has('state_of_activity_status') ? ' is-invalid' : ''), 'placeholder' => 'State Of Activity Status']) }}
            {!! $errors->first('state_of_activity_status', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_client') }}
            {{ Form::text('is_client', $person->is_client, ['class' => 'form-control' . ($errors->has('is_client') ? ' is-invalid' : ''), 'placeholder' => 'Is Client']) }}
            {!! $errors->first('is_client', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('organization_id') }}
            {{ Form::text('organization_id', $person->organization_id, ['class' => 'form-control' . ($errors->has('organization_id') ? ' is-invalid' : ''), 'placeholder' => 'Organization Id']) }}
            {!! $errors->first('organization_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('department_id') }}
            {{ Form::text('department_id', $person->department_id, ['class' => 'form-control' . ($errors->has('department_id') ? ' is-invalid' : ''), 'placeholder' => 'Department Id']) }}
            {!! $errors->first('department_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>