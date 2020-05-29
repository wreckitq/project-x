{!! form()->text('title')->label('Title') !!}
{!! form()->redactor('description')->label('Description') !!}
{!! form()->selectMultiple('tags[]', $tags)->select($selectedTags)->label('Tags') !!}
{!! form()->dropdown('level', \App\Enums\Level::toSelectArray())->label('Level') !!}
{!! form()->datetimepicker('bid_closed_at')->label('Open Bid Until') !!}
{!! form()->datepicker('due_date')->label('Due Date') !!}
{!! form()->input('reward')->prependIcon('coins')->label('Reward Point') !!}
{!! form()->action([
    form()->submit('Simpan'),
    form()->link('Batal', route('modules::mission.index'))
]) !!}
