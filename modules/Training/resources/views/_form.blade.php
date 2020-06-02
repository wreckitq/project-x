	{!! form()->dropdown('trainer_id', $trainers)->label('Trainer') !!}
	{!! form()->text('title')->label('Title') !!}
	{!! form()->textarea('description')->label('Description') !!}
    {!! form()->selectMultiple('tags[]', $tags)->select($selectedTags)->label('Tags') !!}
	{!! form()->text('fee')->label('Fee') !!}
	{!! form()->text('reward')->label('Reward') !!}
	{!! form()->datetimepicker('start_at')->label('Start_At') !!}
{!! form()->action([
    form()->submit('Simpan'),
    form()->link('Batal', route('modules::training.index'))
]) !!}
