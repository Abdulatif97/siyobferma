<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('create_person_id') }}
            {{ Form::text('create_person_id', $organization->create_person_id, ['class' => 'form-control' . ($errors->has('create_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Create Person Id']) }}
            {!! $errors->first('create_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_person_id') }}
            {{ Form::text('updated_person_id', $organization->updated_person_id, ['class' => 'form-control' . ($errors->has('updated_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Updated Person Id']) }}
            {!! $errors->first('updated_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted') }}
            {{ Form::text('deleted', $organization->deleted, ['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => 'Deleted']) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inn') }}
            {{ Form::text('inn', $organization->inn, ['class' => 'form-control' . ($errors->has('inn') ? ' is-invalid' : ''), 'placeholder' => 'Inn']) }}
            {!! $errors->first('inn', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('full_name') }}
            {{ Form::text('full_name', $organization->full_name, ['class' => 'form-control' . ($errors->has('full_name') ? ' is-invalid' : ''), 'placeholder' => 'Full Name']) }}
            {!! $errors->first('full_name', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_state_reg') }}
            {{ Form::text('date_state_reg', $organization->date_state_reg, ['class' => 'form-control' . ($errors->has('date_state_reg') ? ' is-invalid' : ''), 'placeholder' => 'Date State Reg']) }}
            {!! $errors->first('date_state_reg', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number_state_reg') }}
            {{ Form::text('number_state_reg', $organization->number_state_reg, ['class' => 'form-control' . ($errors->has('number_state_reg') ? ' is-invalid' : ''), 'placeholder' => 'Number State Reg']) }}
            {!! $errors->first('number_state_reg', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('legal_address_soato_id') }}
            {{ Form::text('legal_address_soato_id', $organization->legal_address_soato_id, ['class' => 'form-control' . ($errors->has('legal_address_soato_id') ? ' is-invalid' : ''), 'placeholder' => 'Legal Address Soato Id']) }}
            {!! $errors->first('legal_address_soato_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('legal_address_additional') }}
            {{ Form::text('legal_address_additional', $organization->legal_address_additional, ['class' => 'form-control' . ($errors->has('legal_address_additional') ? ' is-invalid' : ''), 'placeholder' => 'Legal Address Additional']) }}
            {!! $errors->first('legal_address_additional', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opf') }}
            {{ Form::text('opf', $organization->opf, ['class' => 'form-control' . ($errors->has('opf') ? ' is-invalid' : ''), 'placeholder' => 'Opf']) }}
            {!! $errors->first('opf', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('oked') }}
            {{ Form::text('oked', $organization->oked, ['class' => 'form-control' . ($errors->has('oked') ? ' is-invalid' : ''), 'placeholder' => 'Oked']) }}
            {!! $errors->first('oked', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('coogu') }}
            {{ Form::text('coogu', $organization->coogu, ['class' => 'form-control' . ($errors->has('coogu') ? ' is-invalid' : ''), 'placeholder' => 'Coogu']) }}
            {!! $errors->first('coogu', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activity_status') }}
            {{ Form::text('activity_status', $organization->activity_status, ['class' => 'form-control' . ($errors->has('activity_status') ? ' is-invalid' : ''), 'placeholder' => 'Activity Status']) }}
            {!! $errors->first('activity_status', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pcmp') }}
            {{ Form::text('pcmp', $organization->pcmp, ['class' => 'form-control' . ($errors->has('pcmp') ? ' is-invalid' : ''), 'placeholder' => 'Pcmp']) }}
            {!! $errors->first('pcmp', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email_address') }}
            {{ Form::text('email_address', $organization->email_address, ['class' => 'form-control' . ($errors->has('email_address') ? ' is-invalid' : ''), 'placeholder' => 'Email Address']) }}
            {!! $errors->first('email_address', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone_number') }}
            {{ Form::text('phone_number', $organization->phone_number, ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => 'Phone Number']) }}
            {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_client') }}
            {{ Form::text('is_client', $organization->is_client, ['class' => 'form-control' . ($errors->has('is_client') ? ' is-invalid' : ''), 'placeholder' => 'Is Client']) }}
            {!! $errors->first('is_client', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>