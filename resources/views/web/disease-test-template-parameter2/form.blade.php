<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('create_person_id') }}
            {{ Form::text('create_person_id', $diseaseTestTemplateParameter->create_person_id, ['class' => 'form-control' . ($errors->has('create_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Create Person Id']) }}
            {!! $errors->first('create_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_person_id') }}
            {{ Form::text('updated_person_id', $diseaseTestTemplateParameter->updated_person_id, ['class' => 'form-control' . ($errors->has('updated_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Updated Person Id']) }}
            {!! $errors->first('updated_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted') }}
            {{ Form::text('deleted', $diseaseTestTemplateParameter->deleted, ['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => 'Deleted']) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $diseaseTestTemplateParameter->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('disease_test_template_id') }}
            {{ Form::text('disease_test_template_id', $diseaseTestTemplateParameter->disease_test_template_id, ['class' => 'form-control' . ($errors->has('disease_test_template_id') ? ' is-invalid' : ''), 'placeholder' => 'Disease Test Template Id']) }}
            {!! $errors->first('disease_test_template_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('measurement_id') }}
            {{ Form::text('measurement_id', $diseaseTestTemplateParameter->measurement_id, ['class' => 'form-control' . ($errors->has('measurement_id') ? ' is-invalid' : ''), 'placeholder' => 'Measurement Id']) }}
            {!! $errors->first('measurement_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('min_value') }}
            {{ Form::text('min_value', $diseaseTestTemplateParameter->min_value, ['class' => 'form-control' . ($errors->has('min_value') ? ' is-invalid' : ''), 'placeholder' => 'Min Value']) }}
            {!! $errors->first('min_value', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('max_value') }}
            {{ Form::text('max_value', $diseaseTestTemplateParameter->max_value, ['class' => 'form-control' . ($errors->has('max_value') ? ' is-invalid' : ''), 'placeholder' => 'Max Value']) }}
            {!! $errors->first('max_value', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fact_value_check_regex') }}
            {{ Form::text('fact_value_check_regex', $diseaseTestTemplateParameter->fact_value_check_regex, ['class' => 'form-control' . ($errors->has('fact_value_check_regex') ? ' is-invalid' : ''), 'placeholder' => 'Fact Value Check Regex']) }}
            {!! $errors->first('fact_value_check_regex', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('suggested_values') }}
            {{ Form::text('suggested_values', $diseaseTestTemplateParameter->suggested_values, ['class' => 'form-control' . ($errors->has('suggested_values') ? ' is-invalid' : ''), 'placeholder' => 'Suggested Values']) }}
            {!! $errors->first('suggested_values', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>