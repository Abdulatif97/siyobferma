<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('create_person_id') }}
            {{ Form::text('create_person_id', $diseaseTestTemplate->create_person_id, ['class' => 'form-control' . ($errors->has('create_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Create Person Id']) }}
            {!! $errors->first('create_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_person_id') }}
            {{ Form::text('updated_person_id', $diseaseTestTemplate->updated_person_id, ['class' => 'form-control' . ($errors->has('updated_person_id') ? ' is-invalid' : ''), 'placeholder' => 'Updated Person Id']) }}
            {!! $errors->first('updated_person_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted') }}
            {{ Form::text('deleted', $diseaseTestTemplate->deleted, ['class' => 'form-control' . ($errors->has('deleted') ? ' is-invalid' : ''), 'placeholder' => 'Deleted']) }}
            {!! $errors->first('deleted', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('disease_id') }}
            {{ Form::text('disease_id', $diseaseTestTemplate->disease_id, ['class' => 'form-control' . ($errors->has('disease_id') ? ' is-invalid' : ''), 'placeholder' => 'Disease Id']) }}
            {!! $errors->first('disease_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_category_id') }}
            {{ Form::text('item_category_id', $diseaseTestTemplate->item_category_id, ['class' => 'form-control' . ($errors->has('item_category_id') ? ' is-invalid' : ''), 'placeholder' => 'Item Category Id']) }}
            {!! $errors->first('item_category_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_id') }}
            {{ Form::text('item_id', $diseaseTestTemplate->item_id, ['class' => 'form-control' . ($errors->has('item_id') ? ' is-invalid' : ''), 'placeholder' => 'Item Id']) }}
            {!! $errors->first('item_id', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('note') }}
            {{ Form::text('note', $diseaseTestTemplate->note, ['class' => 'form-control' . ($errors->has('note') ? ' is-invalid' : ''), 'placeholder' => 'Note']) }}
            {!! $errors->first('note', '<div class="invalid-feedback">:message</p></div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>