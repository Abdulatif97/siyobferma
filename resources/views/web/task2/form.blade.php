<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('create_person_id') }}
            {{ Form::text('create_person_id', $task->create_person_id, ['class' => 'form-control' . ($errors->has('create_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Create Person Id']) }}
            {!! $errors->first('create_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_person_id') }}
            {{ Form::text('updated_person_id', $task->updated_person_id, ['class' => 'form-control' . ($errors->has('updated_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Updated Person Id']) }}
            {!! $errors->first('updated_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted') }}
            {{ Form::text('deleted', $task->deleted, ['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => 'Deleted']) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('referenced_table_id') }}
            {{ Form::text('referenced_table_id', $task->referenced_table_id, ['class' => 'form-control' . ($errors->has('referenced_table_id') ? ' is-invalid' : ''), 'placeholder' => 'Referenced Table Id']) }}
            {!! $errors->first('referenced_table_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type') }}
            {{ Form::text('type', $task->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number') }}
            {{ Form::text('number', $task->number, ['class' => 'form-control' . ($errors->has('number') ? ' is-invalid' : ''), 'placeholder' => 'Number']) }}
            {!! $errors->first('number', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gave_person_id') }}
            {{ Form::text('gave_person_id', $task->gave_person_id, ['class' => 'form-control' . ($errors->has('gave_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Gave Person Id']) }}
            {!! $errors->first('gave_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gave_person_department_id') }}
            {{ Form::text('gave_person_department_id', $task->gave_person_department_id, ['class' => 'form-control' . ($errors->has('gave_person_department_id') ? ' is-invalid' : ''), 'placeholder' => 'Gave Person Department Id']) }}
            {!! $errors->first('gave_person_department_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gave_date') }}
            {{ Form::text('gave_date', $task->gave_date, ['class' => 'form-control' . ($errors->has('gave_date') ? ' is-invalid' : ''), 'placeholder' => 'Gave Date']) }}
            {!! $errors->first('gave_date', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deadline') }}
            {{ Form::text('deadline', $task->deadline, ['class' => 'form-control' . ($errors->has('deadline') ? ' is-invalid' : ''), 'placeholder' => 'Deadline']) }}
            {!! $errors->first('deadline', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $task->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('attached_person_id') }}
            {{ Form::text('attached_person_id', $task->attached_person_id, ['class' => 'form-control' . ($errors->has('attached_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Attached Person Id']) }}
            {!! $errors->first('attached_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('attached_person_department_id') }}
            {{ Form::text('attached_person_department_id', $task->attached_person_department_id, ['class' => 'form-control' . ($errors->has('attached_person_department_id') ? ' is-invalid' : ''), 'placeholder' => 'Attached Person Department Id']) }}
            {!! $errors->first('attached_person_department_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('approved_person_id') }}
            {{ Form::text('approved_person_id', $task->approved_person_id, ['class' => 'form-control' . ($errors->has('approved_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Approved Person Id']) }}
            {!! $errors->first('approved_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('organization_id') }}
            {{ Form::text('organization_id', $task->organization_id, ['class' => 'form-control' . ($errors->has('organization_id') ? ' is-invalid' : ''), 'placeholder' => 'Organization Id']) }}
            {!! $errors->first('organization_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $task->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>