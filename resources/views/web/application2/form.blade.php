<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('create_person_id') }}
            {{ Form::text('create_person_id', $application->create_person_id, ['class' => 'form-control' . ($errors->has('create_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Create Person Id']) }}
            {!! $errors->first('create_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_person_id') }}
            {{ Form::text('updated_person_id', $application->updated_person_id, ['class' => 'form-control' . ($errors->has('updated_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Updated Person Id']) }}
            {!! $errors->first('updated_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted') }}
            {{ Form::text('deleted', $application->deleted, ['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => 'Deleted']) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('applicant_person_id') }}
            {{ Form::text('applicant_person_id', $application->applicant_person_id, ['class' => 'form-control' . ($errors->has('applicant_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Applicant Person Id']) }}
            {!! $errors->first('applicant_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('applicant_organization_id') }}
            {{ Form::text('applicant_organization_id', $application->applicant_organization_id, ['class' => 'form-control' . ($errors->has('applicant_organization_id') ? ' is-invalid' : ''), 'placeholder' => 'Applicant Organization Id']) }}
            {!! $errors->first('applicant_organization_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('applicant_phone_number') }}
            {{ Form::text('applicant_phone_number', $application->applicant_phone_number, ['class' => 'form-control' . ($errors->has('applicant_phone_number') ? ' is-invalid' : ''), 'placeholder' => 'Applicant Phone Number']) }}
            {!! $errors->first('applicant_phone_number', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('purpose') }}
            {{ Form::text('purpose', $application->purpose, ['class' => 'form-control' . ($errors->has('purpose') ? ' is-invalid' : ''), 'placeholder' => 'Purpose']) }}
            {!! $errors->first('purpose', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('urgency') }}
            {{ Form::text('urgency', $application->urgency, ['class' => 'form-control' . ($errors->has('urgency') ? ' is-invalid' : ''), 'placeholder' => 'Urgency']) }}
            {!! $errors->first('urgency', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('category_paid') }}
            {{ Form::text('category_paid', $application->category_paid, ['class' => 'form-control' . ($errors->has('category_paid') ? ' is-invalid' : ''), 'placeholder' => 'Category Paid']) }}
            {!! $errors->first('category_paid', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('test_address_soato_id') }}
            {{ Form::text('test_address_soato_id', $application->test_address_soato_id, ['class' => 'form-control' . ($errors->has('test_address_soato_id') ? ' is-invalid' : ''), 'placeholder' => 'Test Address Soato Id']) }}
            {!! $errors->first('test_address_soato_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_category_id') }}
            {{ Form::text('item_category_id', $application->item_category_id, ['class' => 'form-control' . ($errors->has('item_category_id') ? ' is-invalid' : ''), 'placeholder' => 'Item Category Id']) }}
            {!! $errors->first('item_category_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_id') }}
            {{ Form::text('item_id', $application->item_id, ['class' => 'form-control' . ($errors->has('item_id') ? ' is-invalid' : ''), 'placeholder' => 'Item Id']) }}
            {!! $errors->first('item_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_owner_person_id') }}
            {{ Form::text('item_owner_person_id', $application->item_owner_person_id, ['class' => 'form-control' . ($errors->has('item_owner_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Item Owner Person Id']) }}
            {!! $errors->first('item_owner_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_owner_organization_id') }}
            {{ Form::text('item_owner_organization_id', $application->item_owner_organization_id, ['class' => 'form-control' . ($errors->has('item_owner_organization_id') ? ' is-invalid' : ''), 'placeholder' => 'Item Owner Organization Id']) }}
            {!! $errors->first('item_owner_organization_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_animal') }}
            {{ Form::text('is_animal', $application->is_animal, ['class' => 'form-control' . ($errors->has('is_animal') ? ' is-invalid' : ''), 'placeholder' => 'Is Animal']) }}
            {!! $errors->first('is_animal', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bdic_id') }}
            {{ Form::text('bdic_id', $application->bdic_id, ['class' => 'form-control' . ($errors->has('bdic_id') ? ' is-invalid' : ''), 'placeholder' => 'Bdic Id']) }}
            {!! $errors->first('bdic_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bdiczm_id') }}
            {{ Form::text('bdiczm_id', $application->bdiczm_id, ['class' => 'form-control' . ($errors->has('bdiczm_id') ? ' is-invalid' : ''), 'placeholder' => 'Bdiczm Id']) }}
            {!! $errors->first('bdiczm_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_sex') }}
            {{ Form::text('item_sex', $application->item_sex, ['class' => 'form-control' . ($errors->has('item_sex') ? ' is-invalid' : ''), 'placeholder' => 'Item Sex']) }}
            {!! $errors->first('item_sex', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_colour') }}
            {{ Form::text('item_colour', $application->item_colour, ['class' => 'form-control' . ($errors->has('item_colour') ? ' is-invalid' : ''), 'placeholder' => 'Item Colour']) }}
            {!! $errors->first('item_colour', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_age') }}
            {{ Form::text('item_age', $application->item_age, ['class' => 'form-control' . ($errors->has('item_age') ? ' is-invalid' : ''), 'placeholder' => 'Item Age']) }}
            {!! $errors->first('item_age', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_health_status') }}
            {{ Form::text('item_health_status', $application->item_health_status, ['class' => 'form-control' . ($errors->has('item_health_status') ? ' is-invalid' : ''), 'placeholder' => 'Item Health Status']) }}
            {!! $errors->first('item_health_status', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('measurement_id') }}
            {{ Form::text('measurement_id', $application->measurement_id, ['class' => 'form-control' . ($errors->has('measurement_id') ? ' is-invalid' : ''), 'placeholder' => 'Measurement Id']) }}
            {!! $errors->first('measurement_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('measurement_value') }}
            {{ Form::text('measurement_value', $application->measurement_value, ['class' => 'form-control' . ($errors->has('measurement_value') ? ' is-invalid' : ''), 'placeholder' => 'Measurement Value']) }}
            {!! $errors->first('measurement_value', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('registration_date') }}
            {{ Form::text('registration_date', $application->registration_date, ['class' => 'form-control' . ($errors->has('registration_date') ? ' is-invalid' : ''), 'placeholder' => 'Registration Date']) }}
            {!! $errors->first('registration_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('akt_date') }}
            {{ Form::text('akt_date', $application->akt_date, ['class' => 'form-control' . ($errors->has('akt_date') ? ' is-invalid' : ''), 'placeholder' => 'Akt Date']) }}
            {!! $errors->first('akt_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('test_receipt_date') }}
            {{ Form::text('test_receipt_date', $application->test_receipt_date, ['class' => 'form-control' . ($errors->has('test_receipt_date') ? ' is-invalid' : ''), 'placeholder' => 'Test Receipt Date']) }}
            {!! $errors->first('test_receipt_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('test_date') }}
            {{ Form::text('test_date', $application->test_date, ['class' => 'form-control' . ($errors->has('test_date') ? ' is-invalid' : ''), 'placeholder' => 'Test Date']) }}
            {!! $errors->first('test_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('attachments') }}
            {{ Form::text('attachments', $application->attachments, ['class' => 'form-control' . ($errors->has('attachments') ? ' is-invalid' : ''), 'placeholder' => 'Attachments']) }}
            {!! $errors->first('attachments', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $application->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>