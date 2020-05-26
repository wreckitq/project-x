{!! form()->text('title')->label('Title') !!}
{!! form()->redactor('description')->label('Description') !!}
{!! form()->rupiah('reward')->label('Reward') !!}
{!! form()->dropdown('level', \App\Enums\Level::toSelectArray())->label('Level') !!}
{!! form()->datepicker('due_date')->label('Due Date') !!}
{!! form()->action([
    form()->submit('Simpan'),
    form()->link('Batal', route('modules::mission.index'))
]) !!}
