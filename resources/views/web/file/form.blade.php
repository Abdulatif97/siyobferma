<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('create_person_id') }}
            {{ Form::text('create_person_id', $file->create_person_id, ['class' => 'form-control' . ($errors->has('create_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Create Person Id']) }}
            {!! $errors->first('create_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_person_id') }}
            {{ Form::text('updated_person_id', $file->updated_person_id, ['class' => 'form-control' . ($errors->has('updated_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Updated Person Id']) }}
            {!! $errors->first('updated_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted') }}
            {{ Form::text('deleted', $file->deleted, ['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => 'Deleted']) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('referenced_column_id') }}
            {{ Form::text('referenced_column_id', $file->referenced_column_id, ['class' => 'form-control' . ($errors->has('referenced_column_id') ? ' is-invalid' : ''), 'placeholder' => 'Referenced Column Id']) }}
            {!! $errors->first('referenced_column_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type') }}
            {{ Form::text('type', $file->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('original_name') }}
            {{ Form::text('original_name', $file->original_name, ['class' => 'form-control' . ($errors->has('original_name') ? ' is-invalid' : ''), 'placeholder' => 'Original Name']) }}
            {!! $errors->first('original_name', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('generated_name') }}
            {{ Form::text('generated_name', $file->generated_name, ['class' => 'form-control' . ($errors->has('generated_name') ? ' is-invalid' : ''), 'placeholder' => 'Generated Name']) }}
            {!! $errors->first('generated_name', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('file_extension') }}
            {{ Form::text('file_extension', $file->file_extension, ['class' => 'form-control' . ($errors->has('file_extension') ? ' is-invalid' : ''), 'placeholder' => 'File Extension']) }}
            {!! $errors->first('file_extension', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>